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
class hero2 extends hero{
    function test(){
    echo $this->name."<br />";
    echo $this->sex."<br />";
    echo $this->shengao."<br />";
    }
}
$cyj= new hero();
$cyj2=new hero2();
echo $cyj->name."<br />";
echo $cyj2->test();
?>
