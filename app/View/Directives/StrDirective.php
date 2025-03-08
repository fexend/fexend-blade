<?php

namespace App\View\Directives;

use Illuminate\Support\Facades\Blade;

class StrDirective
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Load the string blade directive.
     */
    public static function load()
    {
        Blade::directive('fileResponse', function ($expression) {
            return "<?php echo route('response-file', ['fileName' => \App\Supports\Str::fileResponse($expression)])  ?>";
        });
        Blade::directive('fileRequest', function ($expression) {
            return
                "<?php echo \App\Supports\Str::fileRequest($expression) ?>";
        });
        Blade::directive('lang', function ($expression) {
            return "<?php echo \App\Supports\Str::lang($expression) ?>";
        });
        Blade::directive('limit', function ($expression) {
            return "<?php echo \App\Supports\Str::limit($expression) ?>";
        });
    }
}
