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
        $this->test = new fetch;
    }
    //test for that a list of assets are stored
    public function testStoreListOfAstes()
    {
        $this->assertClassHasStaticAttribute('path', 'fetch');
        //checks for a key jquery
        $this->assertArrayHasKey('jquery', fetch::$path);
    }
    //epected invavalied argument
    public function testThrowException()
    {
        $this->fetch->run();
    }
    public function testDownloadIfFound()
    {
        $this->fetch->run('query');
    }
}