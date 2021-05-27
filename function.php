<?php
	function add($a,$b=10)
	{
		//$a=10;
		//$b=20;
		$c=$a+$b;
		echo"Add: ".$c."<br>";
	}
	function sub($a,$b)
	{
		
		$c=$a-$b;
		//echo"Sub: ".$c."<br>";
		return $c;
	}
	
	add(10,20); //function call
	
	
	add(30);
	
	
	$z=sub(60,40);
	
	echo"Sub: ".$z."<br>";
	
	echo"Sub: ".sub(100,30);
	
	
	/*
	calcukate are of circle rectange and square using function 
	
	*/
	
?>