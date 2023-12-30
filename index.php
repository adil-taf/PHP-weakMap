<?php

declare(strict_types=1);

use App\Data;
use App\Key;

require_once __DIR__ . '/autoload.php';

$weakMap = new WeakMap();

$data = new Data();

$object1 = new Key("object 1");

$object2 = new Key("object 2");

$weakMap[$object1] = $data;

var_dump(count($weakMap));
echo "<br>";

echo "Unsetting object2...<br>";
unset($object2);
echo "Unsetting object2 done!<br>";

var_dump(count($weakMap));
echo "<br>";

echo "Unsetting object1...<br>";
unset($object1);
echo "Unsetting object1 done!<br>";

var_dump(count($weakMap));
echo "<br>";
