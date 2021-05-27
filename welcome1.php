<?php
session_start();
if(isset($_SESSION['s']))
{
	
	echo"<h1>Welcome User: ".$_SESSION['s']."</h1>";
	
	
}
else
{
	header("Location:login1.php");
}
?>

<br>
<a href="logout1.php">Logout</a>