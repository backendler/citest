<?php
use poc\Coolstuff;

/**
 * Test Class CoolstuffTest
 */
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
        $ret = $this->sut->yeah("test",null);
        $exp = "<h1>test </h1><br>";
        $this->assertEquals($exp ,$ret); 
    }

	public function testDbYeah()
	{
		$ret = $this->sut->yeah("test",0);
		$exp = "<h1>test yeah yeah from db</h1><br>";
		$this->assertEquals($exp ,$ret);
	}
}