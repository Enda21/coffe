<?php
class webtest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/coffe/');
        $this->setPort(4444);
        $this->setHost('localhost');
    }
    public function testHasCoffeeAdd()
    {
        $this->url('CoffeeAdd.php');
        $name = $this->byName('txtName');
        $price = $this->byName('txtPrice');
        $this->assertEquals('',$name->value());
        $this->assertEquals('',$price->value());
    }
    public function testCoffeeAddSubmits()
    {
        //open the url to add coffee
        $this->url('CoffeeAdd.php');
        $form = $this->bycssSelector('form');
        //looks for form action value
        $content = $form->attribute('action');
        $this->assertEquals('', $content);
        //fils in the name and price boxes
        $this->byName('txtName')->value('jack_way');
        $this->byName('txtPrice')->value(10000);
        //Click on the submit
        $form->submit();
    }
    public function testAddingCoffee()
    {
        $this->url('CoffeeAdd.php');
        $form = $this->bycssSelector('form');
        $this->byName('txtName')->value('Irish Coffee');
        $this->select($this->byname('ddlType'))->selectOptionByValue('Classic');
        $this->byName('txtPrice')->value(5.00);
        $this->byName('txtRoast')->value('BlackBean');
        $this->byName('txtCountry')->value('Ireland');
        $this->select($this->byname('ddlImage'))->selectOptionByValue('irish coffee.jpg');
        $this->byName('txtReview')->value('Best thing ever');
//submit form
        $form->submit();
    }
}
?>