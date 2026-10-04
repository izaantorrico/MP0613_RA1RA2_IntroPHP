<?php

class P34_NumberOfNegativeNumbers {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;
        $negatives = 0;

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

            if ($number < 0) {
                $negatives++;
            }
        }

        echo "Number of negative numbers: $negatives\n";
    }
}