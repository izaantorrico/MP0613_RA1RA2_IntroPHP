<?php

class P22_GradesAndPoints {
    public function main(): void {
        $stdin = $GLOBALS['STDIN'] ?? STDIN;

        echo "Give points [0-100]:\n";
        $points = (int) trim((string) fgets($stdin));

        if ($points < 0) {
            $grade = "impossible!";
        } elseif ($points < 50) {
            $grade = "failed";
        } elseif ($points < 60) {
            $grade = "1";
        } elseif ($points < 70) {
            $grade = "2";
        } elseif ($points < 80) {
            $grade = "3";
        } elseif ($points < 90) {
            $grade = "4";
        } elseif ($points <= 100) {
            $grade = "5";
        } else {
            $grade = "incredible!";
        }

        echo "Grade: $grade\n";
    }
}