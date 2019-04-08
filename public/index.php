<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld;

$bonjour = New Hello();
echo $bonjour->talk();

$Helloworld = New SayHello();
echo $Helloworld->world();
