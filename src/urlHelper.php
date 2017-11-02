<?php
namespace Acme;

class UrlHelper
{
    public static function check($url)
    {	
    	if (filter_var($url, FILTER_VALIDATE_URL)) {
	
		    return true;
		} else {
		  
		    return false;
		}
		return true;
    }

    public static function connect($url, $path) {
    	if($path[0] == "/") {
    		$p = parse_url($url, PHP_URL_PATH);
    		$pos = strpos($url, $p);
    		$url = substr($url, 0, $pos);
    	}
    	
    	return $url.$path;
    }

    public static function getInfo($url) {
    	$protocol = parse_url($url, PHP_URL_SCHEME);
    	$port = parse_url($url, PHP_URL_PORT);
    	$domain = parse_url($url, PHP_URL_HOST);
    	
        $arr = array();
        $arr['protocol'] = $protocol;
        $arr['port'] = $port;
        $arr['domain'] = $domain;
    	
        return $arr;
    }
}

// $url = new urlHelper;
    // $url->check("https://www.w3schools.com");
    // $url->connect("http://google.com/a/", "/xyz.html");
    // $url->getInfo("https://www.w3schools.com/a/");
