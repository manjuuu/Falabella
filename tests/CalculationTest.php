<?php


namespace manju\PHP;
use PHPUnit\Framework\TestCase;


class CalculationTest extends  TestCase
{

    private $_calculation;


    public function setUp(){

        $this ->_calculation = new Calculation();
    }

    public function  testThree(){

        $this->assertEquals(0,$this->_calculation->calcRemainder(3,3));
        $this->assertEquals(0,$this->_calculation->calcRemainder(12,3));
        $this->assertEquals(0,$this->_calculation->calcRemainder(27,3));
    }

    public function  testFive(){

        $this->assertEquals(0,$this->_calculation->calcRemainder(5,5));
        $this->assertEquals(0,$this->_calculation->calcRemainder(50,5));
        $this->assertEquals(0,$this->_calculation->calcRemainder(50,5));
    }

    public function  testThreeAndFive(){

        $this->assertEquals(0,$this->_calculation->addRemainder(0,0));
        $this->assertEquals(0,$this->_calculation->addRemainder(($this->_calculation->calcRemainder(15,5)),($this->_calculation->calcRemainder(15,3))));


    }

    public function testNone(){

        $this->assertNotEquals(0,$this->_calculation->calcRemainder(4,3));
        $this->assertNotEquals(0,$this->_calculation->calcRemainder(7,5));
        $this->assertNotEquals(0,$this->_calculation->addRemainder(1,0));
        $this->assertNotEquals(0,$this->_calculation->addRemainder(($this->_calculation->calcRemainder(17,5)),($this->_calculation->calcRemainder(17,3))));
    }
}
