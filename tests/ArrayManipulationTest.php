<?php

use Janitor\ArrayManipulation;

class ArrayManipulationTest extends PHPUnit_Framework_TestCase
{
    /** @test  **/
    
    public function it_will_replace_the_current_value_of_the_array_with_the_least_greater_value_from_the_right_and_put_negative_1_if_no_greater_value()
    {
        $manipulator = new ArrayManipulation;

        $data = [8, 58, 71, 18, 31, 32, 63, 92, 43, 3, 91, 93, 25, 80, 28];
        $expected = [18, 63, 80, 25, 32, 43, 80, 93, 80, 25, 93, -1, 28, -1, -1];

        $this->assertEquals($expected, $manipulator->firstSolution($data));
    }

    /** @test  **/
    
    public function this_will_do_the_same_as_with_the_first_test_but_by_using_a_collection()
    {
        $manipulator = new ArrayManipulation;

        $data = [8, 58, 71, 18, 31, 32, 63, 92, 43, 3, 91, 93, 25, 80, 28];
        $expected = [18, 63, 80, 25, 32, 43, 80, 93, 80, 25, 93, -1, 28, -1, -1];

        $this->assertEquals($expected, $manipulator->secondSolution($data));
    }
}
