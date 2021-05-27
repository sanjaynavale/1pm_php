<html>
<head>
</head>
<body>
	<form method="get" action="">
		Fname:<input type="text" name="fname"><br>
		Lname:<input type="text" name="lname"><br>
		<input type="submit" name="sub" value="Submit">
	</form>
	
	<?php
	
		if(isset($_REQUEST['sub']))
		{
			$fname=$_REQUEST['fname'];
			$lname=$_REQUEST['lname'];
			echo"<table border='1'><tr><th>Lable</th><th>Value</th></tr>";
			echo "<tr><td>My First Name: </td><td>".$fname."</td></tr>";
			echo "<tr><td>My Last Name: </td><td>".$lname."</td></tr></table>";
		}
		
	?>
</body>
</html>