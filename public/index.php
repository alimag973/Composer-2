<?php 

require_once __DIR__ . '/../vendor/autoload.php';

$object = new App\Hello();

echo $object->talk();

?>