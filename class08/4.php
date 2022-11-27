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
        system($this->username);
    }
}
$user_ser = $_GET['benben'];
unserialize($user_ser);
?>
