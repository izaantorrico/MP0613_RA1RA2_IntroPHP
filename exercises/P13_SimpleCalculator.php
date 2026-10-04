<?php

class P13_SimpleCalculator {
    public function main(): void {
        $a = 8;
        $b = 2;

        echo "$a + $b = " . ($a + $b) . "\n";
        echo "$a - $b = " . ($a - $b) . "\n";
        echo "$a * $b = " . ($a * $b) . "\n";
        echo "$a / $b = " . number_format($a / $b, 1) . "\n";
    }
}