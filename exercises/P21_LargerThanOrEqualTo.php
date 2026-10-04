<?php

class P21_LargerThanOrEqualTo {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Give the first number:\n";
        $a = (int) trim((string) fgets($stdin));

        echo "Give the second number:\n";
        $b = (int) trim((string) fgets($stdin));

        if ($a > $b) {
            echo "Greater number is: $a\n";
        } elseif ($b > $a) {
            echo "Greater number is: $b\n";
        } else {
            echo "The numbers are equal!\n";
        }
    }
}