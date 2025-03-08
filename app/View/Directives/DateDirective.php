<?php

namespace App\View\Directives;

use Illuminate\Support\Facades\Blade;

class DateDirective
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Load the date blade directive.
     */
    public static function load()
    {
        Blade::directive('date', function ($expression) {
            return "<?php echo \App\Supports\Carbon::parse($expression)->getDate() ?>";
        });
        Blade::directive('dateHuman', function ($expression) {
            return
                "<?php echo \App\Supports\Carbon::parse($expression)->getdateHuman() ?>";
        });
        Blade::directive('time', function ($expression) {
            return "<?php echo \App\Supports\Carbon::parse($expression)->getTime() ?>";
        });
        Blade::directive('dateInformative', function ($expression) {
            return
                "<?php echo \App\Supports\Carbon::parse($expression)->getDateInformative() ?>";
        });
        Blade::directive('dateTimeInformative', function ($expression) {
            return
                "<?php echo \App\Supports\Carbon::parse($expression)->getDateTimeInformative() ?>";
        });
    }
}
