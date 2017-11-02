<?php

use Acme\urlHelper;
use PHPUnit\Framework\TestCase;

class UrlHelperTest extends TestCase
{
    public function testCheck()
    {
        // test to ensure that the object from an fsockopen is valid
    
        $connObj = new urlHelper();
        $url = "https://www.w3schools.com";
        $this->assertTrue($connObj->check($url), "$url is a valid url");

        $url = "https:w.w3schools.com";
        $this->assertFalse($connObj->check($url), "$url is not a valid url");
    }

     public function testConnect()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new urlHelper();
        $url = "http://google.com/a/";
        $path = "/xyz.html";
        $this->assertTrue($connObj->connect($url, $path) == "http://google.com/xyz.html", "$url connect $path is http://google.com/xyz.html");
        $path = "xyz.html";
        $this->assertTrue($connObj->connect($url, $path) == "http://google.com/a/xyz.html", "$url connect $path is http://google.com/a/xyz.html");
    }

     public function testGetIno()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new urlHelper();
        $url = "http://google.com/a/";
        $arr = $connObj->getInfo($url);
        $this->assertTrue($arr['protocol'] == "http", "protocol of $url is http");
        // $this->assertTrue($arr['port'] == "http", "port of $url is http");
        $this->assertTrue($arr['domain'] == "google.com", "domain of $url is google.com");
    }
}
