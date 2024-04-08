<?php
class person
{
    const a="iam the new person";
    
}
echo person :: a;           //constant is called in out side class.  (::)->is the keyword .
?>
<?php
class hello
{
    const b=" <br>iam the secound person";   
    function to()
    {
        echo self::b;           //constant is called in inside the function .(::)->keyword.
    }                           //self -> also keyword it's use for inside the class.
}
$obj=new hello();                  // create the obj name .
$obj->to();                   //declear the function name .




?>
