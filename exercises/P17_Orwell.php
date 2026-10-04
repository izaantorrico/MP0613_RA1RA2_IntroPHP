<?php

class P17_Orwell {
    public function main(): void {
        echo "Give a number:\n";
        $number = (int) trim((string) fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number === 1984) {
            echo "Orwell\n";
        }
    }
}