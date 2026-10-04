<?php

class P23_AbsoluteValue {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        $number = (int) trim((string) fgets($stdin));
        echo abs($number) . "\n";
    }
}