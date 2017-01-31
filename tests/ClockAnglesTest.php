<?php

use Janitor\ClockAngles;

class ClockAnglesTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_will_return_60()
    {
        $angle = new ClockAngles();

        $this->assertEquals(60, $angle->calculate('2:00'));
    }

    /** @test  **/
    public function it_will_return_212_point_5()
    {
        $angle = new ClockAngles();

        $this->assertEquals(212.5, $angle->calculate('3:55'));
    }
}
