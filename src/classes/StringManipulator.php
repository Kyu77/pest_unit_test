<?php 

class StringManipulator {
    /**
     * Concatenates two strings.
     * 
     * @param string $a
     * @param string $b
     * @return string
     */
    public function concatenate(string $a, string $b): string {
        return $a . $b;
    }

    /**
     * Checks if a string contains a substring.
     * 
     * @param string $string
     * @param string $substring
     * @return bool
     */
    public function contains(string $string, string $substring): bool {
        return strpos($string, $substring) !== false;
    }
}
