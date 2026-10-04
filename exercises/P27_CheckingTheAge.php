<?php

class P27_CheckingTheAge {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "How old are you?\n";
        $age = (int) trim((string) fgets($stdin));

        if ($age >= 0 && $age <= 120) {
            echo "Ok\n";
        } else {
            echo "Impossible!\n";
        }
    }
}