<?php
/**
 * Created by PhpStorm.
 * User: Enda
 * Date: 25/04/2016
 * Time: 14:26
 */
require_once 'app/fetch.php';
class Fetch_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->fetch = new Fetch_Task();
    }
    //test for that a list of assets are stored
    public function testStoreListOfAsstes()
    {
        $this->assertClassHasStaticAttribute('path', 'Fetch_Task');
        //checks for a key jquery
        $this->assertArrayHasKey('jquery', Fetch_Task::$path);
    }
    //epected invavalied argument run fetch method
    public function testThrowException()
    {
        $this->fetch->run();
    }
    ///Failing
   /*public function testDownloadIfFound()
    {
        $this->fetch->run(['jquery']);
        $this->assertFileExists('coffe/js/vendors/jquery.js');
    }*/
}