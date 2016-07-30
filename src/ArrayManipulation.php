<?php

namespace Janitor;

use Illuminate\Support\Collection;

class ArrayManipulation
{

    /**
     * Vanilla PHP solution
     * @param  array  $data
     * @return array
     */
    public function firstSolution($data = [])
    {   
        $manipulated = [];

        foreach ($data as $key => $value) {
            $replacement = -1;

            for ($x = 0; $x < count($data); $x++) {
                $temp = 0;
                if ($key >= $x) {
                    continue;
                }

                if ($data[$x] < $value) {
                    continue;
                }

                $temp = $data[$x];

                for ($y = 0; $y < count($data); $y++) {
                    if ($temp > $data[$y] && $data[$y] > $value && $y > $key) {
                        $temp = $data[$y];
                    }
                }
                
                $replacement = $temp;
            }

            array_push($manipulated, $replacement);
        }

        return $manipulated;
    }

    /**
     * Shorter solution using illuminate collection
     * @param  array  $data
     * @return array
     */
    public function secondSolution($data = [])
    {
        $sorted = collect($data)->sort();
        
        return collect($data)->map(function ($value, $index) use ($sorted) {
            return $sorted->filter(function ($item, $key) use ($value, $index) {
                if (($item > $value) && ($key > $index)) {
                    return $item;
                }
            })->sort()->first();
        })->transform(function ($value) {
            if ($value == null) {
                return -1;
            }

            return $value;
        })->all();
    }
}
