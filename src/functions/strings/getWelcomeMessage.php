<?php 


/**
 * Returns a welcome message.
 * 
 * @param string $name
 * @return string
 */
function getWelcomeMessage(string $name): string {
    return "Welcome, " . ucfirst($name) . "!";
}
