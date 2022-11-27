<?php
highlight_file(__FILE__);
class test{
    var $pub='benben';
    function jineng(){
        echo $this->pub;
    }
}
class test2{
    var $ben;
    function __construct(){
        $this->ben=new test();
    }
}
$a = new test2();
echo serialize($a);
?>
