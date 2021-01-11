<?php namespace sol;

/*
Traits are used to declare methods that can be used in multiple classes. 
Traits can have methods and abstract methods that can be used in multiple classes, 
and the methods can have any access modifier (public, private, or protected).

EXAMPLE ::
*/

trait circle {
  public function c1() {
    echo "Circle method 1 ";
  }
}

trait square {
  public function s1() {
    echo "Square method 1";
  }
}

class Shape {
  use circle;
}

class Shape1 {
  use circle, square;
}

$obj = new Shape();
$obj->c1();
echo "<br>";

$obj2 = new Shape1();
$obj2->c1();
$obj2->s1();
?>
