<?php
class car
  {
   static  function display()
    {
      return "AUDI";
    }
    function __construct()

    {
      echo "the car name is" : .self :: display();   
        }
    
  }
$obj=new car();

?>
<?php
class car
  {
   static  function display()
    {
      return "AUDI";
    }
    class BMW extends car
    {
      function __construct()
        {
          echo "the super car name is:".parent::display();
        }
  
    }
$obj=new BMW();
$obj->car();

?>
<?php
class bike
{
    public static $name="hero";                  //it's is the parameter type.
    

}
class next extends bike{
    function __construct()
    {
        echo "<br>the next bike is :".parent::$name;
    }
}
$obj=new next();
?>
