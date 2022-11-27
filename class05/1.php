<?php
highlight_file(__FILE__);
class test {
    public  $a = 'benben';
    protected  $b = 666;
    private  $c = false;
    public function displayVar() {
        echo $this->a;
    }
}
$d = new test();
$d = serialize($d);
echo $d."<br />";
echo urlencode($d)."<br />";
$a = urlencode($d);
$b = unserialize(urldecode($a));
var_dump($b);

?>
