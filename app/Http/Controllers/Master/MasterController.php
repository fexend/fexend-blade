<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Routing\Controllers\HasMiddleware;

final class MasterController extends Controller implements HasMiddleware
{
    /**
     * Instantiate a new MasterController instance.
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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.index', [
            'title' => 'Master Management',
        ]);
    }
}
