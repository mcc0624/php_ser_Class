<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    var $benben = "this is test!!";
         public function __toString()
         {
             return '格式不对，输出不了!';
          }
}
$test = new User() ;
print_r($test);
echo "<br />";
echo $test;
?>
