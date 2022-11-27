<?php
highlight_file(__FILE__);
class test{
    public $pub='benben';
    function jineng(){
        echo $this->pub;
    }
}
$a = new test();
echo serialize($a);
?>
