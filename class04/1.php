<?php
highlight_file(__FILE__);
class TEST {
    public $data;
    public $data2 = "dazzhuang";
    private $pass;

    public function __construct($data, $pass)
    {
        $this->data = $data;
        $this->pass = $pass;
    }
}
$number = 34;
$str = 'user';
$bool = true;
$null = NULL;
$arr = array('a' => 10, 'b' => 200);
$test = new TEST('uu', true);
$test2 = new TEST('uu', true);
$test2->data = &$test2->data2;
echo serialize($number)."<br />";
echo serialize($str)."<br />";
echo serialize($bool)."<br />";
echo serialize($null)."<br />";
echo serialize($arr)."<br />";
echo serialize($test)."<br />";
echo serialize($test2)."<br />";
?>

