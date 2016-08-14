<?php

use Janitor\MinMinMax;

class MinMinMaxTest extends PHPUnit_Framework_TestCase
{
    /** @test  **/
    
    public function it_will_get_the_min_min_max_of_numbers_in_an_array()
    {
        $number = new MinMinMax;

        $this->assertEquals([-23, -22, 24], $number->firstSolution([-1, 4, 5, -23, 24]));
        $this->assertEquals([-23, -22, 24], $number->secondSolution([-1, 4, 5, -23, 24]));
    }
}
