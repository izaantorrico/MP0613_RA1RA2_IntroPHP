<?php

class P16_SpeedingTicket {
    private int $speed = 130;

    public function main(): void {
        if ($this->speed > 120) {
            echo "Speeding ticket!\n";
        }
    }
}