<?php
highlight_file(__FILE__);
class User {
    public function __destruct()
    {
        echo "触发了析构函数1次"."<br />" ;
    }
}
$test = new User("benben");
$ser = serialize($test);
unserialize($ser);

?>
