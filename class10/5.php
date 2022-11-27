<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    private $var;
    public function __isset($arg1 )
    {
        echo  $arg1;
    }
}
$test = new User() ;
isset($test->var);
?>

