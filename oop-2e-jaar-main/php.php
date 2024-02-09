<?php
class Flower{
    //Attribute
    private $color;
    private $name;
   
    //constructor
    function __construct($name, $color)
{
       $this->color = $color;
       $this->name = $name;
       

}
 
}
$flower1 = new Flower("roos", "groen");
$flower2 = new Flower("zonnebloem", "geel");
 
var_dump($flower1);
echo("</br>");

var_dump($flower2);
echo("</br>");
