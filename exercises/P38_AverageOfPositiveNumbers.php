<?php

class P38_AverageOfPositiveNumbers {
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

            if ($number > 0) {
                $count++;
                $sum += $number;
            }
        }

        if ($count === 0) {
            echo "Cannot calculate the average\n";
        } else {
            echo "Average of the numbers: " . ($sum / $count) . "\n";
        }
    }
}