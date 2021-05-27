<?php
	/*
	1=> index array 
	2=> associative array 
	*/
	$arr=array(3,6,8,4,9,7,10);
	
	
	//echo $arr[3];
	
	/*
	for($i=0;$i<7;$i++)
	{
		echo $arr[$i]."<br>";
	}
	*/
	
	/*
	echo"<pre>";
	print_r($arr);
	echo "</pre>";
	*/
	
	/*
	foreach($arr as $v)
	{
		echo $v."<br>";
	}
	*/
	
	$arr1=array("MH"=>"mumbai","GJ"=>"Gandhinagar","MP"=>"Bhopal","AP"=>"Hyderabad");
	//echo $arr1["GJ"];
	
	/*
	foreach($arr1 as $k=>$v)
	{
		
		echo $k."=>".$v."<br>";
	}
	*/
	
	//print_r($arr1);
	
	$marks=array("sanjay"=>array("Math"=>60,"Eng"=>65,"Phy"=>70),"Vikas"=>array("Math"=>78,"Eng"=>55,"Phy"=>80),"Neha"=>array("Math"=>90,"Eng"=>45,"Phy"=>70));
	
	
	//echo $marks["Neha"]["Eng"];
	/*
	echo"<pre>";
	print_r($marks);
	*/
	
	rsort($arr);
	print_r($arr);
	
	echo array_product($arr);
	echo"<br>";
	
	krsort($arr1);
	print_r($arr1);
	
	
?>