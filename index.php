<?php
require 'vendor/autoload.php';

use JM\Morsecode\Morsecode;

$morse = new Morsecode('This is a test');
echo $morse->encode();