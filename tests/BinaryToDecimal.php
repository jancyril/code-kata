<?php

use Janitor\BinaryToDecimal;

class BinaryToDecimalTest extends PHPUnit_Framework_TestCase
{
    /** @test  **/
    
    public function it_can_convert_a_positive_decimal()
    {
        $converter = new BinaryToDecimal;

        $this->assertEquals(11, $converter->convert(3));
        $this->assertEquals(100, $converter->convert(4));
    }

    /** @test */
    public function it_can_convert_a_negative_decimal()
    {
        $converter = new BinaryToDecimal;

        $this->assertEquals(11111111111111111111111111111101, $converter->convert(-3));
    }
}
