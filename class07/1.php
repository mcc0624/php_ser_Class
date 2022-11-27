<?php
highlight_file(__FILE__);
class User {
    public $username;
    public function __construct($username) {
        $this->username = $username;
        echo "触发了构造函数1次" ;
    }
}
$test = new User("benben");
$ser = serialize($test);
unserialize($ser);

?>

