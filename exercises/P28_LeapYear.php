<?php

class P28_LeapYear {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Give a year:\n";
        $year = (int) trim((string) fgets($stdin));

        $isLeap = ($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0;

        if ($isLeap) {
            echo "The year is a leap year.\n";
        } else {
            echo "The year is not a leap year.\n";
        }
    }
}