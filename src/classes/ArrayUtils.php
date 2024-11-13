<?php 

class ArrayUtils {
    /**
     * Returns the first element of an array.
     * 
     * @param array $array
     * @return mixed|null
     */
    public function getFirstElement(array $array){
        return $array[0] ?? null;
    }

    /**
     * Checks if an array is empty.
     * 
     * @param array $array
     * @return bool
     */
    public function isEmpty(array $array): bool {
        return empty($array);
    }
}