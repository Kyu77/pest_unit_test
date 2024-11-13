<?php 

class Calculator {
    /**
     * Adds two numbers.
     * 
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function add(int|float $a, int|float $b): int|float {
        return $a + $b;
    }

    
    /**
     * Multiplies two numbers.
     * 
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function multiply( int|float $a, int|float $b): int|float {
        return $a * $b;
    }
}