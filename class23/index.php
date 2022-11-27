<?php
highlight_file(__FILE__);
error_reporting(0);
class TestObject {
    public function __destruct() {
		include('flag.php');
        echo $flag;
    }
}
$filename = $_POST['file'];
if (isset($filename)){
	echo md5_file($filename);
}
//upload.php
?>