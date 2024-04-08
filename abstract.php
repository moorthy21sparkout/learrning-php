<?php
abstract class person               //   method declear only and we implement to child class
{
    abstract function display();
}
class person1 extends person           // this is the chlid calss and implement .
{
    function display()
    {
        echo "the person 1 is persent <br >";
    }
}
class person2 extends person           // this is the chlid calss and implement .
{
    function display()
    {
        echo "the person 2 is persent";
    }
}
$obj=new person1();
$obj->display();
$obj=new person2();  
$obj->display();                          // we can declear more number of abstracts  method 
                                        //but all method implement in all child class 
?>