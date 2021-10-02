<?php

//Config file
require_once 'config.php';


//auto load
function _autoload($className){
    require_once 'lib'.$className.'.php';
}