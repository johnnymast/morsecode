<?php
require 'vendor/autoload.php';

use JM\Morsecode\Morsecode;

$morse = new Morsecode();
echo $morse->decode('... --- ...');