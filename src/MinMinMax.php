<?php

namespace Janitor;

/**
 * Given an unsorted array of integers, find the smallest number in the array,
 * the largest number in the array, and the smallest number between the two array bounds that is not in the array.
 * For instance, given the array [-1, 4, 5, -23, 24], the smallest number is -23, the largest number is 24,
 * and the smallest number between the array bounds is -22. You may assume the input is well-formed.
 *
 * Your task is to provide two solutions to the problem, the first a straight forward solution
 * that a beginning programmer might write, and a second solution that is rather more “creative;”.
 */
class MinMinMax
{
    public function firstSolution($numbers = [])
    {
        asort($numbers);
        $min = current($numbers);
        $max = end($numbers);

        for ($decimal = $min + 1; $decimal < $max; $decimal++) { 
            if (! in_array($decimal, $numbers)) {
               $between = $decimal;
               break;
            }
        }

        return [$min, $between, $max];
    }

    public function secondSolution($numbers = [])
    {
        $filtered = collect([collect($numbers)->min(), collect($numbers)->max()]);

        $between[] = collect(range($filtered[0], $filtered[1]))->filter(function ($decimal) use ($numbers) {
            return (! in_array($decimal, $numbers));
        })->first();

        return array_values(collect($between)->merge($filtered)->sort()->toArray());
    }
}
