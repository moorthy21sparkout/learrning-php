<?php
class fruits                       
{
    public $name;
    public $color;
    public $price;
    function __construct($name,$color,$price)
    {
        $this->name=$name;
        $this->color=$color;
        $this->price=$price;

    }
    function get()
    {
        echo "the name is:.$this->name.<br>
        color is :.$this->color.<br> price is :.$this->price.";
    }
}
class apple extends fruits
{

    function another()
    {
        echo "<br> this is new product <br> ";
    } 
}

class orange extends fruits
{

    function another1()
    {
        echo "<br> this is new product ";
    } 
}
$obj=new apple("apple","red","60₹");
$obj->get();
$obj->another();
$obj=new orange("orange","yellow","50₹");
$obj->get();
$obj->another1();

 //property and method in use in another class.

?>