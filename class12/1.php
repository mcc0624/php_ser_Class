<?php
highlight_file(__FILE__);
error_reporting(0);
class fast {
    public $source;
    public function __wakeup(){
        echo "wakeup is here!!";
        echo  $this->source;
    }
}
class sec {
    var $benben;
    public function __tostring(){
        echo "tostring is here!!";
    }
}
$b = $_GET['benben'];
unserialize($b);
?>
