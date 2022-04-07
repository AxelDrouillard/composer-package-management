<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello');


$bessie->setEyes('Oo')
    ->setTongue('U')
    ->setPoop('ooo')
    ->setUdder('W');
// store the output in a variable
$output = $bessie->say();
echo $output;

use CowSay\Bear;

$bear = new Bear('Hey, BooBoo!');
$bear->setEyes('o -');
echo $bear;
