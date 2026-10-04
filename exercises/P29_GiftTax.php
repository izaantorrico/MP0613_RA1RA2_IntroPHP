<?php

class P29_GiftTax {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Value of the gift?\n";
        $value = (int) trim((string) fgets($stdin));

        if ($value < 5000) {
            echo "No tax!\n";
            return;
        }

        if ($value < 25000) {
            $tax = 100 + ($value - 5000) * 0.08;
        } elseif ($value < 55000) {
            $tax = 1700 + ($value - 25000) * 0.10;
        } elseif ($value < 200000) {
            $tax = 4700 + ($value - 55000) * 0.12;
        } elseif ($value < 1000000) {
            $tax = 22100 + ($value - 200000) * 0.15;
        } else {
            $tax = 142100 + ($value - 1000000) * 0.17;
        }

        echo "Tax: " . round($tax, 2) . "\n";
    }
}