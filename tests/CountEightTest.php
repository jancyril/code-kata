<?php

use Janitor\CountEight;

class CountEightTest extends PHPUnit_Framework_TestCase
{
    /** @test  **/
    
    public function it_can_convert_a_positive_decimal()
    {
        $counter = new CountEight;
        $this->assertEquals(1, $counter->count(8));

        $counter = new CountEight;
        $this->assertEquals(2, $counter->count(808));

        $counter = new CountEight;
        $this->assertEquals(3, $counter->count(80818));

        $counter = new CountEight;
        $this->assertEquals(4, $counter->count(8818));
    }
}
