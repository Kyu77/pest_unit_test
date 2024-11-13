<?php 

/**
 * Sorts an associative array by its values in ascending order.
 * 
 * @param array $assocArray
 * @return array
 */
function sortAssocArrayByValues(array $assocArray): array {
    asort($assocArray);
    return $assocArray;
}
