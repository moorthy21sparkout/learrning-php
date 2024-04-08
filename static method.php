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
