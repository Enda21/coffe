<?php
require_once 'person.php';

class PersonTest extends PHPUnit_Framework_Testcase {
	public $test;

	public function setup() {
		$this->test = new Person("Enda");
	}
pub;ic function testName()
{
	$enda = $this->test->getName();
	$this->assertTrue($Enda == 'Enda');
}

}

?>