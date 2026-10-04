<?php

class P32_OnlyPositives {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

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
                echo "Unsuitable number\n";
                continue;
            }

            echo $number * $number . "\n";
        }
    }
}