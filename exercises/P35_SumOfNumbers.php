<?php

class P35_SumOfNumbers {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;
        $sum = 0;

        while (true) {
            echo "Give a number:\n";
            $line = fgets($stdin);

            if ($line === false) {
                break;
            }

            $number = (int) trim($line);

            if ($number === 0) {
                break;
            }

            $sum += $number;
        }

        echo "Sum of the numbers: $sum\n";
    }
}