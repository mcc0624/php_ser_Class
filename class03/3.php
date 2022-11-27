<?php
highlight_file(__FILE__);
class hero{
  public  $name='chengyaojin';
  private  $sex='man';
  protected  $shengao='165';
  function jineng($var1) {
    echo $this->name;
    echo $var1;
    }
}
$cyj= new hero();
echo $cyj->name."<br />";
echo $cyj->sex."<br />";
echo $cyj->shengao."<br />";
?>

