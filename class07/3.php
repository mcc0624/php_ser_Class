<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    var $cmd = "echo 'dazhuang666!!';" ;
    public function __destruct()
    {
        eval ($this->cmd);
    }
}
$ser = $_GET["benben"];
unserialize($ser);

?>
