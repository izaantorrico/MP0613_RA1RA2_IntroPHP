<?php

class P19_Positivity {
    public function main(): void {
        echo "Give a number:\n";
        $number = (int) trim((string) fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number > 0) {
            echo "The number is positive.\n";
        } else {
            echo "The number is not positive.\n";
        }
    }
}