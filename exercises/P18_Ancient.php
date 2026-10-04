<?php

class P18_Ancient {
    public function main(): void {
        echo "Give a year:\n";
        $year = (int) trim((string) fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($year < 2015) {
            echo "Ancient history!\n";
        }
    }
}