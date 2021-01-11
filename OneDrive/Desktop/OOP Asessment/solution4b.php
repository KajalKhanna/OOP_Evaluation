<?php namespace sol2;

/* NAmespaces allow for better organization by grouping classes that work together to perform a task
	Namespaces allow the same name to be used for more than one class

*/
  include 'solution3.php';
  include 'solution4a.php';
  use circle as c1;
  use sol1;
  use sol;     
  use Shape ; 
  echo \sol1\Shape::areaofcircle() ,"<br />\n";
  echo \sol\Shape::c1() ,"<br />\n";
  echo \sol\Shape1::s1() ,"<br />\n";
    ?>