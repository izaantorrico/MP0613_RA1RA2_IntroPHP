<?php

class P40_CountingToHundred {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Give a number:\n";
        $start = (int) trim((string) fgets($stdin));

        for ($i = $start; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
}