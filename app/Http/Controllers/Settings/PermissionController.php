<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Permission\StorePermissionRequest;
use App\Http\Requests\Settings\Permission\UpdatePermissionRequest;
use App\Models\Permission;
use App\Supports\Carbon;
use App\Supports\Str;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

final class PermissionController extends Controller implements HasMiddleware
{
    /**
     * Instantiate a new PermissionController instance.
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
            new Middleware('permission:permission view-list', only: ['index', 'getData']),
            new Middleware('permission:permission create', only: ['store']),
            new Middleware('permission:permission view-detail', only: ['show']),
            new Middleware('permission:permission update', only: ['update']),
            new Middleware('permission:permission delete', only: ['destroy']),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings.permission.index', [
            'title' => __('Permissions'),
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
        $query = Permission::query()
            ->select([
                'id',
                'name',
                'group',
                'guard_name',
                'created_at',
                'updated_at',
            ]);

        return datatables($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $configs = [
                    [
                        'name' => 'edit',
                        'is_edit' => true,
                        'route' => route('settings.permission.edit', $row->id),
                        'permission_names' => [],
                        'role_names' => [],
                        'model_policy' => null,
                        'id' => 'edit-permission-' . $row->id,
                    ],
                    [
                        'name' => 'delete',
                        'route' => route('settings.permission.destroy', $row->id),
                        'permission_names' => [],
                        'role_names' => [],
                        'model_policy' => null,
                        'uses_modal' => true,
                        'id' => 'delete-permission-' . $row->id,
                    ],
                ];

                return view("components.data-table.action", [
                    'configs' => $configs,
                    'model' => $row,
                ]);
            })
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->getDateTimeInformativeWithTimezone();
            })
            ->editColumn('updated_at', function ($row) {
                return Carbon::parse($row->updated_at)->getDateHuman();
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.permission.create', [
            'title' => __('Create Permission'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        $this->db->beginTransaction();

        try {
            $name = $request->input('name');
            $guardName = $request->input('guard_name');
            $group = $request->input('group');

            if (is_array($name)) {
                $permissions = [];
                foreach ($name as $key => $value) {
                    $permissions[] = [
                        'id' => Str::uuid(),
                        'name' => "{$group} {$value}",
                        'guard_name' => $guardName[$key],
                        'group' => $group,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }

                Permission::insert($permissions);
            }
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => __('An error occurred while creating the permission.')]);
        }

        $this->db->commit();

        return redirect()
            ->route('settings.permission.index')
            ->with('success', __('Permission created successfully.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('settings.permission.edit', [
            'title' => __('Edit Permission'),
            'permission' => $permission,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $this->db->beginTransaction();

        try {
            $permission->update($request->validated());
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => __('An error occurred while updating the permission.')]);
        }

        $this->db->commit();

        return redirect()
            ->route('settings.permission.index')
            ->with('success', __('Permission updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $this->db->beginTransaction();

        try {
            $permission->delete();
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => __('An error occurred while deleting the permission.')]);
        }

        $this->db->commit();

        return redirect()
            ->route('settings.permission.index')
            ->with('success', __('Permission deleted successfully.'));
    }
}
