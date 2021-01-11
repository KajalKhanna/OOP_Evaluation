<?php namespace sol1;
/* We can implement multiple inheritance in php by using interfaces and traits
A Trait is a type of class
Traits can extend no more than one class but can extend multiple traits at the same time.


SYNTAX ::class child_class extends parent_class {
    use trait_name;
    ...
    ...
    child_class functions
}

EXAMPLE ::
*/
trait Circle {
    public function areaofcircle() {
		$radius=5 ;
       echo $radius * $radius * pi();
    }
    public function perimeterofcircle() {
       $radius =5;
       echo  2 * $radius * pi();
    }
}

trait Square {
    public function areaofsquare() {
       $side =9;
	   echo $side * $side;
	   
    }
    public function perimeterofsquare() {
    $side=9;
	   echo  4 * $side;
    }
}

class Shape  {
    use Circle, Square ;
}




$s =new Shape();
$s->areaofcircle();
$s->areaofsquare();
$s->perimeterofcircle();
$s->perimeterofsquare();

?>