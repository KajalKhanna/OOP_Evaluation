<?php 

/*Create an interface A that has 2 methods,
abstract class B implements the method and gives definition for 1 method.
Create a concrete class and create its object */
interface A//interface A that has 2 methods a1 and a2
{
 public function a1();
 public function a2();
}

 abstract class B implements A
	{//abstract class B implements the method and gives definition for 1 method a1.

	abstract public function a3();
	public function a1()
	 {
		 echo "Ba1";
	 }
	 
	 }
 
	 class C extends B 
	 //concrete class C
	 {
		 public function a2() 
	 {
		echo "Ca2";

	 }

	public function a3() 
	 {
		echo "Ca3";

	 }


	 public function c() 
	 {
		echo "Concrete class method";

	 }

	}
		$obj = new C();
		$obj->a1();
		$obj->a2();
		$obj->a3();
		$obj->c();
		?>