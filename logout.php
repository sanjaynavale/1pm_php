<?php
session_start();
if(session_destroy())
{
	echo"<script>alert('Logout Successfully.....!!!!');window.location='home.php';</script>";
}
?>