<?php

namespace Janitor;

/**
 * Write a program that, given a time as hours and minutes (using a 12-hour clock),
 * calculates the angle between the two hands. For instance, at 2:00 the angle is 60°.
 *
 * See https://programmingpraxis.com/2016/07/01/clock-angles/
 */
class ClockAngles
{
    public function calculate(string $time): float
    {
        $time = explode(':', trim($time));
        $short = $this->computeShortHand($time[0], $time[1]);
        $long = $this->computeLongHand($time[1]);

        return abs($short - $long);
    }

    private function computeShortHand(int $hour, int $minute): float
    {
        return (60 * $hour + $minute) / 2;
    }

    private function computeLongHand(int $minute): float
    {
        return 6 * $minute;
    }
}
