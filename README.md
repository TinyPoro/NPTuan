# Install

```php
$ composer require ngophuongtuan/url_helper
```

# Usage

Use namespace Acme\urlHelper to include urlHelper class.

```php
use Acme\urlHelper;

$url= new urlHelper();
```

Check valid url.

```php
$url->check($url);   				//return true if the $url is valid

```

Connect a url and a path

```php
$url->connect("$url", "$path");		//connect the $url with $path to a new string url
```

Get info of an url.

```php
$info = $url->getInfo("$url");				

$protocol = $info['protocol'];		//get the protocol
$port = $info['port'];				//get the port
$domain = $info['domain'];			//get the domain

```