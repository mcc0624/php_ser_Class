<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    public $var1;
    public function __set($arg1 ,$arg2)
    {
        echo  $arg1.','.$arg2;
    }
}
$test = new User() ;
$test ->var2=1;
?>

