<?php

use Janitor\StringRotation;

class StringRotationTest extends PHPUnit_Framework_TestCase
{
    /** @test  **/
    
    public function it_can_get_all_the_rotation_of_a_string()
    {
        $rotation = new StringRotation;

        $first = ["bsjq", "qbsj", "sjqb", "twZNsslC", "jqbs"];
        $second = ["Ajylvpy", "ylvpyAj", "jylvpyA", "lvpyAjy", "pyAjylv", "vpyAjyl", "ipywee"];

        $this->assertTrue($rotation->check('bsjq', $first));
        $this->assertFalse($rotation->check('Ajylvpy', $second));
    }
}
