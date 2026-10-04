<?php

class P39_Counting {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Up to what number?\n";
        $limit = (int) trim((string) fgets($stdin));

        for ($i = 0; $i <= $limit; $i++) {
            echo $i . "\n";
        }
    }
}