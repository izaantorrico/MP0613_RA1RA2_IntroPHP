
<?php

class P20_Adulthood {
    public function main(): void {
        echo "How old are you?\n";
        $age = (int) trim((string) fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($age >= 18) {
            echo "You are an adult\n";
        } else {
            echo "You are not an adult\n";
        }
    }
}
