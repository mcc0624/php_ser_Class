<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    private $var;
    public function __clone( )
    {
        echo  "__clone test";
          }
}
$test = new User() ;
$newclass = clone($test)
?>
