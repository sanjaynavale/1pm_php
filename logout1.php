<?php
session_start();
if(session_destroy())
{
	echo"<script>alert('Logout Succesfull....!!!');window.location='login1.php';</script>";
	
	
}

?>