<?php

namespace App\Supports;

final class Carbon extends \Carbon\Carbon
{
    /**
     * Get the application's default timezone from config.
     *
     * @return string
     */
    public static function getAppTimezone()
    {
        return config('app.timezone');
    }

    /**
     * Create a new Carbon instance with the application timezone.
     *
     * @param string|\DateTimeInterface|null $time
     * @param \DateTimeZone|string|null $tz
     * @return static
     */
    public static function createWithAppTimezone($time = null, $tz = null)
    {
        return static::parse($time, $tz ?: static::getAppTimezone());
    }

    /**
     * Create a Carbon instance for the current date and time in the application timezone.
     *
     * @param \DateTimeZone|string|null $tz
     * @return static
     */
    public static function nowWithAppTimezone($tz = null)
    {
        return static::now($tz ?: static::getAppTimezone());
    }

    /**
     * Convert the current instance to application timezone.
     *
     * @return static
     */
    public function toAppTimezone()
    {
        return $this->setTimezone(static::getAppTimezone());
    }

    /**
     * Get the date in Y-m-d format.
     *
     * @param bool $useAppTimezone Whether to use the application timezone
     * @return string
     */
    public function getDate($useAppTimezone = true)
    {
        $date = $this;
        if ($useAppTimezone) {
            $date = $this->copy()->toAppTimezone();
        }
        return $date->format('j F Y');
    }

    /**
     * Get the time in H:i format.
     *
     * @param bool $useAppTimezone Whether to use the application timezone
     * @return string
     */
    public function getTime($useAppTimezone = true)
    {
        $date = $this;
        if ($useAppTimezone) {
            $date = $this->copy()->toAppTimezone();
        }
        return $date->format('H:i');
    }

    /**
     * Get the date in a human-readable format.
     *
     * @param bool $useAppTimezone Whether to use the application timezone
     * @return string
     */
    public function getDateHuman($useAppTimezone = true)
    {
        $date = $this;
        if ($useAppTimezone) {
            $date = $this->copy()->toAppTimezone();
        }
        return $date->diffForHumans();
    }

    /**
     * Get the date in an informative format.
     *
     * @param bool $useAppTimezone Whether to use the application timezone
     * @return string
     */
    public function getDateInformative($useAppTimezone = true)
    {
        $date = $this;
        if ($useAppTimezone) {
            $date = $this->copy()->toAppTimezone();
        }
        return $date->format('l, F j, Y');
    }

    /**
     * Get the date and time in an informative format with hour and minute.
     *
     * @param bool $useAppTimezone Whether to use the application timezone
     * @return string
     */
    public function getDateTimeInformative($useAppTimezone = true)
    {
        $date = $this;
        if ($useAppTimezone) {
            $date = $this->copy()->toAppTimezone();
        }
        return $date->format('l, F j, Y H:i');
    }

    /**
     * Get the date with timezone.
     *
     * @param string|null $timezone
     * @return string
     */
    public function getDateWithTimezone($timezone = null)
    {
        $timezone = $timezone ?: static::getAppTimezone();
        return $this->copy()->setTimezone($timezone)->format('j F Y');
    }

    /**
     * Get the date and time with timezone.
     *
     * @param string|null $timezone
     * @return string
     */
    public function getDateTimeWithTimezone($timezone = null)
    {
        $timezone = $timezone ?: static::getAppTimezone();
        return $this->copy()->setTimezone($timezone)->format('j F Y H:i T');
    }

    /**
     * Get the date in an informative format with timezone.
     *
     * @param string|null $timezone
     * @return string
     */
    public function getDateInformativeWithTimezone($timezone = null)
    {
        $timezone = $timezone ?: static::getAppTimezone();
        return $this->copy()->setTimezone($timezone)->format('l, F j, Y T');
    }

    /**
     * Get the date and time in an informative format with timezone.
     *
     * @param string|null $timezone
     * @return string
     */
    public function getDateTimeInformativeWithTimezone($timezone = null)
    {
        $timezone = $timezone ?: static::getAppTimezone();
        return $this->copy()->setTimezone($timezone)->format('l, F j, Y H:i T');
    }
}
