# Install

```sh
$ composer require ngophuongtuan/url_helper
```

#Usage

Write these line at the top of you file
```sh
require_once __DIR__.'/../vendor/autoload.php';

```


Use namespace Acme\urlHelper to include urlHelper class.
```sh
use Acme\urlHelper;

$url= new urlHelper();

$url->check($url);   				//return true if the $url is valid
$url->connect("$url", "$path");		//connect the $url with $path to a new string url
$url->getInfo("$url");				//get the protocol, port and domain of the url
```