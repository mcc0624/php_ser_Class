<?php
highlight_file(__FILE__);
error_reporting(0);
class index {
    private $test;
    public function __construct(){
        $this->test = new normal();
    }
    public function __destruct(){
        $this->test->action();
    }
}
class normal {
    public function action(){
        echo "please attack me";
    }
}
class evil {
    var $test2;
    public function action(){
        eval($this->test2);
    }
}
unserialize($_GET['test']);
?>
