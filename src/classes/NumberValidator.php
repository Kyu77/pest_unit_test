<?php 

class NumberValidator {
    /**
     * Checks if a number is positive.
     * 
     * @param int|float $number
     * @return bool
     */
    public function isPositive( int|float $number): bool {
        return $number > 0;
    }

    /**
     * Checks if a number is within a range.
     * 
     * @param int|float $number
     * @param int|float $min
     * @param int|float $max
     * @return bool
     */
    public function isInRange(int|float $number, int|float $min, int|float $max): bool {
        return $number >= $min && $number <= $max;
    }
}
