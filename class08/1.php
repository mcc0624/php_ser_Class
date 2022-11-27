<?php
highlight_file(__FILE__);
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
        return array('username', 'nickname');
    }
}
$user = new User('a', 'b', 'c');
echo serialize($user);
?>

