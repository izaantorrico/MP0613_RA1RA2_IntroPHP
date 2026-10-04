<?php

class P31_AreWeThereYet {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        while (true) {
            echo "Give a number:\n";
            $line = fgets($stdin);

            if ($line === false || (int) trim($line) === 4) {
                break;
            }
        }
    }
}