<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('site_settings')) {
    /**
     * Retrieve site settings
     *
     * @return stdClass|null
     */
    function site_settings(): ?stdClass
    {
        return DB::table('settings')->where('id', 1)->first();
    }
}

if (!function_exists('uniqueId')) {
    /**
     * Generate a unique ID.
     *
     * @return string A unique ID.
     */
    function uniqueId(): string
    {
        return substr(number_format(time() * rand(), 0, '', ''), 0, 12);
    }
}

if (!function_exists('isActive')) {
    /**
     * Check if the current route matches any of the given routes/patterns.
     *
     * @param array|string $routes Route name, pattern, or array of routes/patterns
     * @param string $activeClass Class to return if active
     * @param string $inactiveClass Class to return if inactive
     * @param bool $returnBool Return boolean instead of class string
     * @return string|bool
     */
    function isActive(
        array|string $routes,
        string $activeClass = 'active',
        string $inactiveClass = '',
        bool $returnBool = false
    ): string|bool {
        $isActive = request()->routeIs($routes);

        if ($returnBool) {
            return $isActive;
        }

        return $isActive ? $activeClass : $inactiveClass;
    }
}

if (!function_exists('formatTabName')) {
    /**
     * Formats a tab name for display by converting kebab-case to readable format.
     *
     * Handles special cases and provides proper capitalization for tab names.
     * Default to 'profile' if an empty tab name is provided.
     *
     * @param string|null $tab The tab name in kebab-case (e.g., 'logo-favicon')
     * @return string Formatted display name (e.g., 'Logo & Favicon')
     *
     * @example
     * formatTabName('logo-favicon') returns 'Logo & Favicon'
     * formatTabName('seo-settings') returns 'Seo Settings'
     * formatTabName(null) returns 'Profile'
     */
    function formatTabName(?string $tab): string
    {
        // Default to 'profile' if no tab specified
        $tab = $tab ?: 'profile';

        // Handle special cases that need custom formatting
        return match ($tab) {
            'logo-favicon' => 'Logo & Favicon',
            'seo-settings' => 'SEO Settings',
            default => implode(' ', array_map('ucfirst', explode('-', $tab))),
        };
    }
}

if(!function_exists('getTime')){
    /**
     * Calculates the time difference between the current time and a given date
     * and returns a human-readable string (e.g., "2 days ago", "1 hour ago")
     *
     * @param string $date The date string to compare with the current time
     * @return string Human-readable time difference
     * @throws Exception If date parsing fails
     */
    function getTime(string $date): string
    {
        // Create DateTime objects for the current time and the provided date
        $now = new DateTime();
        $Date = new DateTime($date);

        // Calculate the difference between the two dates
        $interval = $Date->diff($now);

        // Check year difference
        if ($interval->y >= 1) {
            $years = $interval->y;
            $suffix = ($years === 1) ? 'year' : 'years';
            return $years . ' ' . $suffix . ' ago';
        }
        // Check the month difference (if less than 1 year)
        elseif ($interval->m >= 1) {
            $months = $interval->m;
            $suffix = ($months === 1) ? 'month' : 'months';
            return $months . ' ' . $suffix . ' ago';
        }
        // Check day difference (if less than 1 month)
        elseif ($interval->d >= 1) {
            $days = $interval->d;
            $suffix = ($days === 1) ? 'day' : 'days';
            return $days . ' ' . $suffix . ' ago';
        }
        // Check the hour difference (if less than 1 day)
        elseif ($interval->h >= 1) {
            $hours = $interval->h;
            $suffix = ($hours === 1) ? 'hour' : 'hours';
            return $hours . ' ' . $suffix . ' ago';
        }
        // Check minutes difference (if less than 1 hour)
        elseif ($interval->i >= 1) {
            $minutes = $interval->i;
            $suffix = ($minutes === 1) ? 'minute' : 'minutes';
            return $minutes . ' ' . $suffix . ' ago';
        }
        // Default to seconds (if less than 1 minute)
        else {
            $seconds = $interval->s;
            $suffix = ($seconds === 1) ? 'second' : 'seconds';
            return $seconds . ' ' . $suffix . ' ago';
        }
    }
}

if(!function_exists('hidePhoneNumber')){
    /**
     * Masks a phone number in the format (XXX) *** ****
     *
     * @param string $phone The phone number to mask
     * @return string Masked phone number in format (XXX) *** ****
     * @throws InvalidArgumentException If input is not a valid phone number
     */
    function hidePhoneNumber(string $phone): string
    {
        // Remove all non-digit characters
        $digits = preg_replace('/[^0-9]/', '', $phone);

        // Validate we have at least 10 digits (US phone number)
        if (strlen($digits) < 10) {
            throw new InvalidArgumentException('Invalid phone number format');
        }

        // Extract area code (first 3 digits)
        $areaCode = substr($digits, 0, 3);

        // Return formatted masked number: (XXX) *** ****
        return "($areaCode) *** ****";
    }
}
