<?php
highlight_file(__FILE__);
error_reporting(0);
function filter($name){
    $safe=array("flag","php");
    $name=str_replace($safe,"hk",$name);
    return $name;
}
class test{
    var $user;
    var $pass;
    var $vip = false ;
    function __construct($user,$pass){
        $this->user=$user;
	$this->pass=$pass;
    }
}
$param=$_GET['user'];
$pass=$_GET['pass'];
$param=serialize(new test($param,$pass));
$profile=unserialize(filter($param));

if ($profile->vip){
    echo file_get_contents("flag.php");
}
?>
