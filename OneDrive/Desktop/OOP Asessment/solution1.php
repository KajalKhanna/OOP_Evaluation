<?php 

/*Method Chaining : Refers to calling more than one methods at once,
when a class's methods return the $this keyword, they can be chained together to create much more streaming code.
Example
To create an animated figure 
Do following
*/

class Shape
{
	
	function line()
	{
		
		echo "draw a line ";
		return $this;
	}
	
	function circle()
	{
		
		echo "draw a circle ";
		return $this;
	}
	function triangle()
	{
		
		echo "draw a triangle ";
		
		return $this;
	}
	
	
}


$obj=new Shape();
$obj->line()->circle()->triangle();


?>