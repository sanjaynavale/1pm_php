<?php
for($i=1;$i<=4;$i++)
{
	for($k=4;$k>$i;$k--)
	{
		echo" &nbsp;";
		
	}
	
	for($j=1;$j<=($i*2-1);$j++)
	{
		echo"*";
	}
	
	echo"<br>";
}

?>