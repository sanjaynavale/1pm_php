<html>
<head>
</head>
<body>
	<?php
	$error="";
	//if(isset($_POST['sub']))
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST['uname']) || empty($_POST['pass']))
		{
			$error="<p style='color:red'>Please fill all fields...!!!</p>";
		}
		else
		{
			echo $_POST['uname'];
		}
	}
	?>
	
	<form method="post">
		<div><?php echo $error;?></div>
		username:<input type="text" name="uname"><br>
		password:<input type="password" name="pass"><br>
		<input type="submit" name="sub" value="Submit">
	</form>
</body>
</html>