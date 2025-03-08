<?php

namespace App\View\Directives;

use Illuminate\Support\Facades\Blade;

class NumberDirective
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Load the number blade directive.
     */
    public static function load()
    {
        Blade::directive('number', function ($expression) {
            return "<?php echo \App\Supports\Number::format($expression) ?>";
        });
        Blade::directive(
            'formatCurrency',
            function ($expression) {
                return "<?php echo \App\Supports\Number::formatCurrency($expression) ?>";
            }
        );
        Blade::directive('formatNumber', function ($expression) {
            return
                "<?php echo \App\Supports\Number::formatPhoneNumber($expression) ?>";
        });
        Blade::directive('toDecimal', function ($expression) {
            return "<?php echo \App\Supports\Number::toDecimal($expression) ?>";
        });
        Blade::directive(
            'phoneNumber',
            function ($expression) {
                return "<?php echo \App\Supports\Number::phoneNumber($expression) ?>";
            }
        );
        Blade::directive('toDecimal', function ($expression) {
            return
                "<?php echo \App\Supports\Number::toDecimal($expression) ?>";
        });
        Blade::directive('reversePhoneNumber', function ($expression) {
            return "<?php echo \App\Supports\Number::reversePhoneNumber($expression) ?>";
        });
        Blade::directive('summarizeNumber', function ($expression) {
            return
                "<?php echo \App\Supports\Number::forHumans($expression) ?>";
        });
    }
}
