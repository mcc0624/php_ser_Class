<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    var $benben = "this is test!!";
         public function __invoke()
         {
             echo  '它不是个函数!';
          }
}
$test = new User() ;
echo $test ->benben;
echo "<br />";
echo $test() ->benben;
?>
