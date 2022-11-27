<?php
highlight_file(__FILE__);
class hero{
  var $name;
  var $sex;
  function jineng($var1) {
    echo $this->name."<br />";
    echo $var1."<br />";
    }
}
$cyj= new hero();
$cyj->name='chengyaojin';
$cyj->sex='man';
$cyj->jineng('zuofan');
print_r($cyj);
?>
