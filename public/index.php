<?php
require_once "../vendor/autoload.php";
use App\Wcs\Hello;
use HelloWorld\SayHello;

$hel = new Hello();
var_dump($hel);
echo $hel->talk();

$sayHello = new SayHello();
var_dump($sayHello);
echo $sayHello->world();

echo "<br>";

echo SayHello::world();