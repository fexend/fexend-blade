<?php

namespace App\Supports;

class Number extends \Illuminate\Support\Number
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Format currency
     */
    public static function formatCurrency(?int $value, ?string $currency = 'Rp')
    {
        return $currency . ' ' . number_format($value, 2, '.', ',');
    }

    /**
     * Format number
     */
    public static function formatNumber(?int $value)
    {
        return number_format($value, 2, '.', ',');
    }

    /**
     * Format phone number
     */
    public static function formatPhoneNumber(?string $value)
    {
        return substr_replace(substr_replace($value, ' ', 4, 0), ' ', 8, 0);
    }

    /**
     * To decimal
     */
    public static function toDecimal(?string $value)
    {
        return str_replace(',', '', $value);
    }

    /**
     * To phone number
     */
    public static function reversePhoneNumber(?string $value)
    {
        return str_replace(' ', '', $value);
    }
}
