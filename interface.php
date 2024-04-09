<right><h3>Interface</h3></right>


<?php
interface method1
{
public function number1();
public function number2($n);
public function number3($a);

}
interface method2
{
public function number4();
public function number5($q);
public function number6($w);  //we can use multiple interface in single class

}
class all implements method1,method2 //only declear the interface number
{
    function number1()
    {
        echo "this is the first number<br>";
    }
    function number2($n)
    {
        echo $n."<br>";
    }
    function number3($a)
    {
        echo $a;
    }
    function number4()
    {
        echo "<>this is the 4th  number<br>";
    }
    function number5($q)
    {
        echo $q."<br>";
    }
    function number6($w)
    {
        echo $w;
    }
}
$obj=new all();            //interface is allways public 
$obj->number1();
$obj->number2("this is the secound number");
$obj->number3("this is the third number");
$obj->number4();
$obj->number5("this is the 5th number");
$obj->number6("this is the 6th number");


?>