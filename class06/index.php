<?php
highlight_file(__FILE__);
error_reporting(0);
class test{
    public $a = 'echo "this is test!!";';
    public function displayVar() {
        eval($this->a);
    }
}

$get = $_GET["benben"];
$b = unserialize($get);
$b->displayVar() ;

?>
