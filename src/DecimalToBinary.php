<?php

namespace Janitor;

class DecimalToBinary
{
    public function convert($decimal)
    {
        $result = '';
        $byte = pow(2, 32-1);

        while ($byte > 0) {
            $result .= ($decimal&$byte) == 0 ? '0' : '1'; 
            $byte = $byte >> 1;
        }

        return $result;
    }
}
