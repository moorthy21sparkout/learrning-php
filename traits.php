<?php
trait message1
{
    function display1()
    {
        echo "hello every one<br>";
    }
}
trait message2
{
    function display2()
    {
        echo "every think fine";
    }
}
class first
{
    use message1,message2;
}
class secound 
{
    use message1,message2;
}
$obj=new first();
$obj->display1();
$obj=new secound();
$obj->display1();// it's nothing  but one subclass can inheritance in one parant class .trait is overcome the this consept. 
$obj->display2();
?>