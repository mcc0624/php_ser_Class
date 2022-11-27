<?php
highlight_file(__FILE__);
error_reporting(0);
class Testobj
{
    var $output="echo 'ok';";
    function __destruct()
    {
        eval($this->output);
    }
}
if(isset($_GET['filename']))
{
    $filename=$_GET['filename'];
    var_dump(file_exists($filename));
}
?>