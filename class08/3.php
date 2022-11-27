<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    const SITE = 'uusama';
    public $username;
    public $nickname;
    private $password;
    private $order;
    public function __wakeup() {
        $this->password = $this->username;
    }
}
$user_ser = 'O:4:"User":2:{s:8:"username";s:1:"a";s:8:"nickname";s:1:"b";}';
var_dump(unserialize($user_ser));
?>
