<html>
<head>
</head>
<body>
	<?php
		$total=0;
		if(isset($_REQUEST['sub']))
		{
			$fno=$_REQUEST['fno'];
			$sno=$_REQUEST['sno'];
			$total=$fno+$sno;
			//echo $total;
		}
		
	?>
	<form method="post" action="">
		Fno:<input type="text" name="fno"><br>
		Sno:<input type="text" name="sno"><br>
		<input type="submit" name="sub" value="Submit"><br>
		
		Result:- <input type="text" name="res" value="<?php echo $total; ?>">
	</form>
	

</body>
</html>