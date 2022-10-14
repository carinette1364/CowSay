<?php

require __DIR__ . '/../vendor/autoload.php';

use CowSay\Cow;

$theLaughingCow = new Cow('Hello, Farm!');

// store the output in a variable
$output = $theLaughingCow->say();
echo $theLaughingCow->setTongue('U');
// echo $output;




