<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    public function __callStatic($arg1,$arg2)
    {
        echo "$arg1,$arg2[0]";
          }
}
$test = new User() ;
$test::callxxx('a');
?>

