<?php
require_once  "vendor/autoload.php";
use lib\Singleton;

$singleton = Singleton::getInstanciate();
$singleton2 = Singleton::getInstanciate();
$singleton3 = Singleton::getInstanciate();
var_dump($singleton);
var_dump($singleton2);
var_dump($singleton3);

echo Singleton::getQuery();



class db{

};


$db = new db();
$db1 = new db();
$db2 = new db();

var_dump($db);
var_dump($db1);
var_dump($db2);