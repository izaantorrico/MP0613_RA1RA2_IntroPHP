<?php

class P30_CarryOn {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        while (true) {
            echo "Shall we carry on?\n";
            $line = fgets($stdin);

            if ($line === false || trim($line) === "no") {
                break;
            }
        }
    }
}