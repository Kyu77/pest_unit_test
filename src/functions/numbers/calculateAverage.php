<?php 

/**
 * Returns the average of an array of numbers.
 * 
 * @param array $numbers
 * @return float
 * @throws InvalidArgumentException
 */
function calculateAverage(array $numbers): float {
    if (empty($numbers)) {
        throw new InvalidArgumentException("The array cannot be empty.");
    }
    return array_sum($numbers) / count($numbers);
}