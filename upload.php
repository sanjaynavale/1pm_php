<html>
<head>
</head>
<body>
	<form enctype="multipart/form-data" method="post">
	Select File: <input type="file" name="f"><br>
	<input type="submit" name="sub" value="Upload">
	</form>
	
	<?php
	if(isset($_POST['sub']))
	{
		$name=$_FILES["f"]["name"];
		if(!empty($name))
		{
			$type=$_FILES["f"]["type"];
			$size=$_FILES["f"]["size"]/1024;
			$tmp=$_FILES["f"]["tmp_name"];
			
			//echo $name."<br>".$type."<br>".$size."<br>".$tmp;
			
			$loc="img/";
			if(($type=="image/jpg" || $type=="image/jpeg") && ($size>50 && $size<200))
			{
				
				if(move_uploaded_file($tmp,$loc.$name))
				{
					echo"File upload..";
					echo"<img src='".$loc.$name."'>";
				}
				else{
					echo"Error.....";
					echo $_FILES['f']['error'];
				}
			}
			else{
				echo"Please upload jpg or jpeg file and size ..";
			}
		}
		else
		{
			echo"Please Select The File...";
		}
		
		
	}
	?>
</body>
</html>