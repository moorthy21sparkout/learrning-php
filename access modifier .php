<?php
class cars{
    public $name;
    protected $color;
    private $weight;
    function set_name($name)
    {
        $this->name=$name;
        echo "the car name is :$this->name";
        
    }
    protected function set_color($color)
    {
        $this->color=$color;
    }
    private function set_weight($weight)
    {
        $this->weight=$weight;
    }

}
$obj=new cars();
$obj->set_name("blue");
// $obj->set_color("red");           //error.  
// $obj->set_weight("1.2tan");       //error.

?>