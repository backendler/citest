<?php


class CoolstuffTest extends \PHPUnit_Framework_TestCase{

    /**
     * Subject under test.
     * @var Coolstuff
     */
    protected $sut;

    public function setUp()
    {
        $this->sut = new Coolstuff();
    }

    public function testYeah()
    {
        $ret = $this->sut->yeah("test");
        $exp = "<h1>test</h1><br>";
        $this->assertEquals($exp ,$ret); 
    }
}