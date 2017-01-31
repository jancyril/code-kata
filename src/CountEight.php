<?php

namespace Janitor;

/**
 * Count the number of times 8 exists. If on the left side of 8 is also 8, count it as 2.
 */
class CountEight
{
    private $count = 0;

    private $isEight = false;

    public function count($number)
    {
        $number = str_split($number);

        if (empty($number) || $number[0] == '') {
            return $this->count;
        }

        if ($number[0] == 8) {
            $this->count += $this->isEight ? 2 : 1;
            $this->isEight = true;

            array_shift($number);

            return $this->count(implode('', $number));
        }

        $this->isEight = false;

        array_shift($number);

        return $this->count(implode('', $number));
    }
}
