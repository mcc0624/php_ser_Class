<?php
error_reporting(0);
class secret{
    var $file='index.php';

    public function __construct($file){
        $this->file=$file;
    }

    function __destruct(){
        include_once($this->file);
        echo $flag;
    }

    function __wakeup(){
        $this->file='index.php';
    }
}
$cmd=$_GET['cmd'];
if (!isset($cmd)){
    highlight_file(__FILE__);
}
else{
    if (preg_match('/[oc]:\d+:/i',$cmd)){
        echo "Are you daydreaming?";
    }
    else{
        unserialize($cmd);
    }
}
//sercet in flag.php
?>
