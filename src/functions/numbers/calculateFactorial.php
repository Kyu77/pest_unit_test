<?php 


/**
 * Calculates the factorial of a number.
 * 
 * @param int $number
 * @return int
 * @throws InvalidArgumentException
 */
function calculateFactorial(int $number): int {
    if ($number < 0) {
        throw new InvalidArgumentException("Factorial is not defined for negative numbers.");
    }
    return $number === 0 ? 1 : $number * calculateFactorial($number - 1);
}
