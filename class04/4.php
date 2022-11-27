<?php
highlight_file(__FILE__);
class test{
    private $pub='benben';
    function jineng(){
        echo $this->pub;
    }
}
$a = new test();
echo serialize($a);
?>
