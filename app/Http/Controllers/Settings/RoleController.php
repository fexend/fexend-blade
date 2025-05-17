<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Role\StoreRoleRequest;
use App\Http\Requests\Settings\Role\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Supports\Carbon;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

final class RoleController extends Controller implements HasMiddleware
{
    /**
     * Instantiate a new RoleController instance.
     */
    public function __construct(
        #[DB('pgsql')] protected $db,
        #[Log] protected $log
    ) {
        // body
    }

    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:viewList role', only: ['index', 'getData']),
            new Middleware('permission:create role', only: ['create', 'store']),
            new Middleware('permission:viewDetail role', only: ['show']),
            new Middleware('permission:update role', only: ['edit', 'update']),
            new Middleware('permission:delete role', only: ['destroy']),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings.role.index', [
            'title' => 'Role Management',
        ]);
    }

    /**
     * Get the data for the listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData(Request $request): JsonResponse
    {
        $query = Role::query()
            ->whereNot('name', 'superuser')
            ->select('id', 'name', 'created_at', 'updated_at');

        return datatables($query)
            ->addIndexColumn()
            ->addColumn('action', function ($customer) {
                $configs = [
                    [
                        'name' => 'edit',
                        'is_edit' => true,
                        'route' => route('settings.role.edit', $customer->id),
                        'permission_names' => [],
                        'role_names' => [],
                        'model_policy' => null,
                        'id' => 'edit-role-' . $customer->id, // Custom ID for the dropdown item
                    ],
                    [
                        'name' => 'delete',
                        'route' => route('settings.role.destroy', $customer->id),
                        'permission_names' => [],
                        'role_names' => [],
                        'model_policy' => null,
                        'uses_modal' => true,
                        'id' => 'delete-role-' . $customer->id, // Custom ID for the dropdown item
                    ],
                ];

                return view("components.data-table.action", [
                    'configs' => $configs,
                    'model' => $customer,
                ]);
            })
            ->editColumn('updated_at', function ($customer) {
                return Carbon::parse($customer->updated_at)->getDateHuman();
            })
            ->editColumn('created_at', function ($customer) {
                return Carbon::parse($customer->created_at)->getDateTimeInformativeWithTimezone();
            })
            ->rawColumns([
                'action',
            ])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::query()
            ->select('name', 'group')
            ->orderBy('name')
            ->groupBy('group', 'name')
            ->get();

        return view('settings.role.create', [
            'title' => 'Create Role',
            'permissions' => $permissions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $this->db->beginTransaction();

        try {
            $role = Role::create([
                'name' => $request->name,
                'guard_name' => 'web',
            ]);

            if ($request->permissions) {
                $role->syncPermissions($request->permissions);
            }
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', config("app.debug") ? $th->getMessage() : "Something went wrong");
        }

        $this->db->commit();

        return redirect()
            ->route('settings.role.index')
            ->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('settings.role.show', [
            'title' => 'Role Detail',
            'role' => $role,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::query()
            ->select('name', 'group')
            ->orderBy('name')
            ->groupBy('group', 'name')
            ->get();

        $role->load('permissions');

        return view('settings.role.edit', [
            'title' => 'Edit Role',
            'role' => $role,
            'permissions' => $permissions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $this->db->beginTransaction();

        try {
            $role->update([
                'name' => $request->name,
            ]);

            if ($request->permissions) {
                $role->syncPermissions($request->permissions);
            } else {
                $role->syncPermissions([]);
            }
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', config("app.debug") ? $th->getMessage() : "Something went wrong");
        }

        $this->db->commit();

        return redirect()
            ->route('settings.role.index')
            ->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->db->beginTransaction();

        try {
            $role->delete();
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->with('error', config("app.debug") ? $th->getMessage() : "Something went wrong");
        }

        $this->db->commit();

        return redirect()
            ->route('settings.role.index')
            ->with('success', 'Role deleted successfully');
    }
}
