<?php
use PHPUnit\Framework\TestCase;
require 'GrumballMachine.php';

class GumballMachineTest extends TestCase
{
    public $gumballInstance;

    public function testWheel(){
        $this->gumballInstance=new GumballMachine();
        $this->gumballInstance->setGumballs(92);
        $this->gumballInstance->turnWheel();
        $this->assertEquals(91, $this->gumballInstance->getGumballs());
    }
}