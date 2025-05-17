<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

final class SelectOptionController extends Controller implements HasMiddleware
{
    /**
     * Instantiate a new SelectOptionController instance.
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
            //
        ];
    }

    public function selectRole(Request $request)
    {
        $roles = Role::query()
            ->select('id', 'name')
            ->when($request->has('search'), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })
            ->limit(10)
            ->get();

        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'Data retrieved successfully',
            'data' => $roles,
        ]);
    }
}
