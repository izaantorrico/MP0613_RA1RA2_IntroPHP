<?php

class P36_NumberAndSumOfNumbers {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;
        $count = 0;
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

            $count++;
            $sum += $number;
        }

        echo "Number of numbers: $count\n";
        echo "Sum of the numbers: $sum\n";
    }
}