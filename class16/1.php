<?php
highlight_file(__FILE__);
error_reporting(0);
function filter($name){
    $safe=array("flag","php");
    $name=str_replace($safe,"hack",$name);
    return $name;
}
class test{
    var $user;
    var $pass='daydream';
    function __construct($user){
        $this->user=$user;
    }
}
$param=$_GET['param'];
$param=serialize(new test($param));
$profile=unserialize(filter($param));

if ($profile->pass=='escaping'){
    echo file_get_contents("flag.php");
}
?>
