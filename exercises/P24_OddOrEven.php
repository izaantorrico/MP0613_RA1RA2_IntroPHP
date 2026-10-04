<?php

class P24_OddOrEven {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Give a number:\n";
        $number = (int) trim((string) fgets($stdin));

        if ($number % 2 === 0) {
            echo "Number is even.\n";
        } else {
            echo "Number is odd.\n";
        }
    }
}