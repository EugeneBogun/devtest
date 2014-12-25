<?php

class DevTestTest extends \PHPUnit_Framework_TestCase
{
    public function testReverse()
    {
        $string = 'string';

        $devTest = new \DevTest();
        $reverseString = $devTest->reverse($string);

        $this->assertFalse($string == $reverseString);

        $twoReverseString = $devTest->reverse($reverseString);

        $this->assertTrue($string == $twoReverseString);
    }
}