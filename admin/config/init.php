<?php

//Config file
require_once 'config.php';


//auto load
function autoLoad($class_name){
require_once 'lib/'.$class_name. '.php';
}

spl_autoload_register('autoLoad');
