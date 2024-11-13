<?php

/**
 * Generates a personalized greeting based on the time of day.
 * 
 * @param string $name
 * @param string $time
 * @return string
 */
function generateGreeting(string $name, string $time): string {
    $period = match (true) {
        $time >= "05:00" && $time < "12:00" => "Good morning",
        $time >= "12:00" && $time < "18:00" => "Good afternoon",
        default => "Good evening",
    };
    return "$period, $name!";
}