<?php
highlight_file(__FILE__);
error_reporting(0);
class A{
    public $v1 = 'ls';
    public $v2 = '123';

    public function __construct($arga,$argc){
        $this->v1 = $arga;
        $this->v2 = $argc;
    }
}
$a = $_GET['v1'];
$b = $_GET['v2'];
$data =  serialize(new A($a,$b));
$data = str_replace("ls","pwd",$data);

var_dump(unserialize($data));
