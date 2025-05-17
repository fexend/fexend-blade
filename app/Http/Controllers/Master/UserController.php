<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\User\StoreUserRequest;
use App\Http\Requests\Master\User\UpdatePasswordRequest;
use App\Http\Requests\Master\User\UpdateUserRequest;
use App\Models\User;
use App\Supports\Carbon;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

final class UserController extends Controller implements HasMiddleware
{
    /**
     * Instantiate a new UserController instance.
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
            new Middleware('permission:user view-list', only: ['index', 'getData']),
            new Middleware('permission:user create', only: ['create', 'store']),
            new Middleware('permission:user view-detail', only: ['show']),
            new Middleware('permission:user update', only: ['edit', 'update']),
            new Middleware('permission:user delete', only: ['destroy']),
            new Middleware('role:superuser', only: ['updatePassword']),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.user.index', [
            'title' => 'User Management',
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
        $query = User::query()
            ->with(['roles' => function ($query) {
                $query->select('id', 'name');
            }])
            ->select([
                'id',
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at',
            ]);

        return datatables($query)
            ->addIndexColumn()
            ->addColumn('action', function ($customer) {
                $configs = [
                    [
                        'name' => 'edit',
                        'is_edit' => true,
                        'route' => route('master.user.edit', $customer->id),
                        'permission_names' => ['user view-detail'],
                        'role_names' => [],
                        'model_policy' => null,
                        'id' => 'edit-role-' . $customer->id, // Custom ID for the dropdown item
                    ],
                    [
                        'name' => 'delete',
                        'route' => route('master.user.destroy', $customer->id),
                        'permission_names' => ['user delete'],
                        'role_names' => [],
                        'model_policy' => null,
                        'uses_modal' => true,
                        'id' => 'delete-role-' . $customer->id, // Custom ID for the dropdown item
                    ],
                    [
                        'name' => 'update password',
                        'route' => 'javascript:void(0)', // Use JavaScript void to make it clickable
                        'permission_names' => [],
                        'role_names' => ['superuser'],
                        'model_policy' => null,
                        'uses_modal' => true,
                        'id' => 'update-password-' . $customer->id,
                    ]
                ];

                return view("components.data-table.action", [
                    'configs' => $configs,
                    'model' => $customer,
                ]);
            })
            ->editColumn('email_verified_at', function ($customer) {
                return Carbon::parse($customer->email_verified_at)->getDateTimeInformativeWithTimezone();
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
        return view('master.user.create', [
            'title' => 'Create User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $this->db->beginTransaction();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            if ($request->role) {
                $user->syncRoles($request->role);
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

        return redirect()->route('master.user.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('master.user.edit', [
            'title' => 'Edit User',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->db->beginTransaction();

        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if ($request->role) {
                $user->syncRoles($request->role);
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

        return redirect()->route('master.user.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->db->beginTransaction();

        try {
            $user->delete();
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', config("app.debug") ? $th->getMessage() : "Something went wrong");
        }

        $this->db->commit();

        return redirect()->route('master.user.index')->with('success', 'User deleted successfully.');
    }

    /**
     * Update the user password.
     */
    public function updatePassword(UpdatePasswordRequest $request, User $user)
    {
        $this->db->beginTransaction();

        try {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        } catch (\Throwable $th) {
            $this->db->rollBack();
            $this->log->error($th);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', config("app.debug") ? $th->getMessage() : "Something went wrong");
        }

        $this->db->commit();

        return redirect()->route('master.user.index')->with('success', 'User password updated successfully.');
    }
}
