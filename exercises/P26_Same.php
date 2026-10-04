<?php

class P26_Same {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Enter the first string:\n";
        $first = rtrim((string) fgets($stdin), "\r\n");

        echo "Enter the second string:\n";
        $second = rtrim((string) fgets($stdin), "\r\n");

        if ($first === $second) {
            echo "Same\n";
        } else {
            echo "Different\n";
        }
    }
}