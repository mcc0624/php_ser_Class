<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    public $var1;
    public function __get($arg1)
    {
        echo  $arg1;
    }
}
$test = new User() ;
$test ->var2;
?>

