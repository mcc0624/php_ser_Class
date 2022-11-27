<?php
highlight_file(__FILE__);
error_reporting(0);
class User {
    const SITE = 'uusama';
    public $username;
    public $nickname;
    private $password;
    public function __construct($username, $nickname, $password)    {
        $this->username = $username;
        $this->nickname = $nickname;
        $this->password = $password;
    }
    public function __sleep() {
        system($this->username);
    }
}
$cmd = $_GET['benben'];
$user = new User($cmd, 'b', 'c');
echo serialize($user);
?>
