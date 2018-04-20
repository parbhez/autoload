<?php 

//Rose, Jesmin, Beli, Mango, Orange, Apple

// require 'flowers/Rose.php';
// require 'flowers/Jesmin.php';
// require 'flowers/Beli.php';

require 'vendor/autoload.php';

$obj = new Rose;
 echo $obj->name;
echo "\n";
 $obj = new Jesmin;
 echo $obj->name;
echo "\n";
 $obj = new Beli;
 echo $obj->name;
echo "\n";
 $obj = new Apple;
 echo $obj->name;

 echo "\n";
 $obj = new Mango;
 echo $obj->name;

 echo "\n";

 $obj = new Orange;
 echo $obj->name;
 echo "\n";

$obj = new Someclass;
 echo $obj->name;


?>