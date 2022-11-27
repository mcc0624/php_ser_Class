<?php 
highlight_file(__FILE__);
error_reporting(0);

ini_set('session.serialize_handler','php');
session_start();

class D{
    var $a;
    function __destruct(){
        eval($this->a);
	}
}
?>