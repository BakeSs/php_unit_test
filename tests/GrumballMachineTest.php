<?php
use PHPUnit\Framework\TestCase;
require 'GrumballMachine.php';

class GumballMachineTest extends TestCase
{
    public $gumballInstance;
    public function setUpGumball()
    {
        $this->gumballInstance=new GumballMachine();
    }
    public function testWheel(){
        $this->gumballInstance->setGumball(92);
        $this->gumballInstance->turnWheel();
        $this->assertEquals(91, $this->gumballInstance->getGumballs());
    }
}
