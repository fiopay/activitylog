<?php

namespace Fiopay\ActivityLog\Handlers;

interface ActivityLogHandlerInterface
{
    /**
     * Log some activity.
     *
     * @param string $text
     * @param string $user
     * @param array  $attributes
     *
     * @return bool
     */
    public function log($text, $user = '', $attributes = []);

    /**
     * Clean old log records.
     *
     * @param int $maxAgeInMonths
     *
     * @return bool
     */
    public function cleanLog($maxAgeInMonths);
}
