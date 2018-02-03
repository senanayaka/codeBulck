<?php
namespace lib;


class Singleton{

public static $instance;

private function __construct()
{
//private for single instance
}

public static function getInstanciate(){

    if(!isset(Singleton::$instance))
    Singleton::$instance = new Singleton();

    return Singleton::$instance;

}


public function getQuery(){

    return  "select * from users";

}


}
