<?php

namespace Janitor;

/**
 * Given an array of positive integers, replace every element with the least greater element to its right. 
 * If there is no greater element to its right, replace it with -1.
 * For instance, given the array [8, 58, 71, 18, 31, 32, 63, 92, 43, 3, 91, 93, 25, 80, 28],
 * the desired output is [18, 63, 80, 25, 32, 43, 80, 93, 80, 25, 93, -1, 28, -1, -1].
 * 
 * See https://programmingpraxis.com/2016/07/22/array-manipulation/
 */
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
            return $value == null ? -1 : $value;
        })->all();
    }
}
