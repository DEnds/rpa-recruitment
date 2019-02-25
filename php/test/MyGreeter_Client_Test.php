<?php

class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function checkGreeting(){

        $hour = date('H');

        if ($hour >= 0 && $hour < 12){

            return 'Good morning';

        } elseif ($hour >= 12 && $hour < 18){

            return 'Good afternoon';

        } else {

            return 'Good evening';
        }
    }

    /**
     * @depends checkGreeting
     */
    public function test_getGreeting($expectedGreeting)
    {
        $this->assertEquals($expectedGreeting, $this->greeter->getGreeting());
    }
}
