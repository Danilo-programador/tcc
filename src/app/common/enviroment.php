<?php

namespace app\common;

class Environment {

    // Method to load ambient variables 
    public static function load($dir) {
        // Verify if .env exist 
        if(!file_exists($dir.'/.env')) {
            return false;
        }
        
        $lines = file($dir.'/.env');
        foreach($lines as $line) {
            putenv(trim($line));
        }
    }
}

?>