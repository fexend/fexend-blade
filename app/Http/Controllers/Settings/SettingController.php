<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Routing\Controllers\HasMiddleware;

final class SettingController extends Controller implements HasMiddleware
{
    /**
     * Instantiate a new SettingController instance.
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

    public function index()
    {
        return view('settings.index', [
            'title' => 'Settings',
            'breadcrumbs' => [
                ['name' => 'Settings', 'url' => route('settings.index')],
            ],
        ]);
    }
}
