<?php

class P33_NumberOfNumbers {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;
        $count = 0;

        while (true) {
            echo "Give a number:\n";
            $line = fgets($stdin);

            if ($line === false) {
                break;
            }

            if ((int) trim($line) === 0) {
                break;
            }

            $count++;
        }

        echo "Number of numbers: $count\n";
    }
}