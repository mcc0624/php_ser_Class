<?php
highlight_file(__FILE__);
error_reporting(0);
include("flag.php");
class just4fun {
    var $enter;
    var $secret;
}

if (isset($_GET['pass'])) {
    $pass = $_GET['pass'];
    $pass=str_replace('*','\*',$pass);
}

$o = unserialize($pass);

if ($o) {
    $o->secret = "*";
    if ($o->secret === $o->enter)
        echo "Congratulation! Here is my secret: ".$flag;
    else
        echo "Oh no... You can't fool me";
}
else echo "are you trolling?";
?>
