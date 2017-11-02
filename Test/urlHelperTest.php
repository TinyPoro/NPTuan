<?php

require_once '../vendor/autoload.php';

use Acme\urlHelper;

class urlHelperTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }
    public function tearDown(){ }

    public function testCheck()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new urlHelper();
        $url = "https://www.w3schools.com";
        $this->assertTrue($connObj->check($url) == false);
    }

     public function testConnect()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new urlHelper();
        $url = "http://google.com/a/";
        $path = "/xyz.html";
        $this->assertTrue($connObj->connect($url, $path) == "http://google.com/xyz.html");
    }

     public function testGetIno()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new urlHelper();
        $url = "http://google.com/a/";
        $this->assertTrue($connObj->getInfo($url) == "http");
    }
}
