<?php

namespace Janitor;

class BinaryToDecimal
{
    public function convert($decimal)
    {
        $result = '';
        $mask = pow(2, 32-1);

        while ($mask > 0) {
            $result .= ($decimal&$mask) == 0 ? '0' : '1'; 
            $mask = $mask >> 1;
        }

        return $result;
    }
}
