<?php 

/**
 * Filters an associative array, keeping only items where the value exceeds a given threshold.
 * 
 * @param array $assocArray
 * @param int|float $threshold
 * @return array
 */
function filterAssocArrayByThreshold(array $assocArray, int|float $threshold): array {
    return array_filter($assocArray, fn($value) => $value > $threshold);
}