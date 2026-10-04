<?php

class P25_Password {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Password?\n";
        $password = rtrim((string) fgets($stdin), "\r\n");

        if ($password === "Caput Draconis") {
            echo "Welcome!\n";
        } else {
            echo "Off with you!\n";
        }
    }
}