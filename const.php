<?php
define("MAX_VALUE","300");
define("SHIP_COST","40",false);
define("CITY",["Mumbai","Pune","Nagpur"]);

echo MAX_VALUE;
echo"<br>";
echo SHIP_COST."<br>";

echo CITY[2]."<br>";

function fun()
{
	
	echo "ship cost: ".SHIP_COST;
}


fun();
?>