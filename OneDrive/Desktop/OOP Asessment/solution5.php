<?php 
/*  Dependency injection is a procedure where one object supplies the dependencies of another object. 
Dependency Injection is a software design approach that allows avoiding hard-coding dependencies
 and makes it possible to change the dependencies both at runtime and compile time.*/

class Shape1{
    private $length;
    private $breadth;
    
    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function getlength() {
        return $this->length;
    }

    public function getbreadth() {
        return $this->breadth;
    }
}

class Shape2 {
    private $shape1;
    private $shape2;

    public function __construct($shape2, Shape1 $shape1) {
        $this->shape1 = $shape1;
        $this->shape2 = $shape2;
    }

    public function getshape1() {
        return $this->shape1;
    }

    public function getshape2() {
        return $this->shape2;
    }
}

?>