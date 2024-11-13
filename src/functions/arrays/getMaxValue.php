<?php


/**
 * Returns the maximum value in an array.
 * 
 * @param array $numbers
 * @return int|float|null
 */
function getMaxValue(array $numbers): int|float|null
{
    return empty($numbers) ? null : max($numbers);
}
