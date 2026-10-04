<?php

class P05_SecondsInADay {
    public function main(): void {
        // Output the label
        echo "Seconds in 1 day:\n";
        
        
        // Calculate the number of seconds in a day
        $hours = 24;
        $minutes = 60;
        $seconds = 60;

        // Write your program here
        $secondsInDay = $hours * $minutes * $seconds;
        echo $secondsInDay . "\n";
    }
}
