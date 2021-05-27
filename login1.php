<?php session_start(); ?>
<html>
<head>
</head>
<body>
	<form method="get">
		Username:<input type="text" name="uname"><br>
		Password:<input type="password" name="pass"><br>
		<input type="submit" name="sub" value="Login">
	</form>
	
	<?php
	if(isset($_GET['sub']))
	{
		$uname=$_GET['uname'];
		$pass=$_GET['pass'];
		if($uname=="Scott" && $pass=="12345")
		{
			$_SESSION['s']=$uname;
			header("Location:welcome1.php");
		}
		else
		{
			echo"<p style='color:red'>Uname and password doest match...</p>";
		}
	}
	
	?>
</body>
</html>