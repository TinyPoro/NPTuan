<?php

use Acme\urlHelper;
use PHPUnit\Framework\TestCase;

class UrlHelperTest extends TestCase
{
    public function testCheck()
    {
        // test to ensure that the object from an fsockopen is valid
    
        $connObj = new urlHelper();
        $url = "https://www.w3schools.com.";
        $this->assertTrue($connObj->check($url), "$url is a valid url");
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
