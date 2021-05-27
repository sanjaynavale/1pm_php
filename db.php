<html>
	<head>
	<style>
	table{
		
		width:100%;
		
	}
	th{
		
		background:black;
		color:orange;
		font-sise:25px;
		padding:0px;
	}
	td{
		
		background:yellow;
		color:red;
		padding:10px;
	}
	</style>
	</head>
	<body>
		<form method="post">
		Eid:<input type="text" name="eid"><br>
		Ename:<input type="text" name="ename" ><br>
		Eloc :<input type="text" name="eloc"><br>
		Edesi:<input type="text" name="edesi"><br>
		Esal:<input type="text" name="esal" ><br>
		<input type="submit" value="Submit" name="sub">
		<input type="submit" value="Display" name="sub">
		<input type="submit" value="CRUD" name="sub">
		</form>
		<?php
		if(isset($_POST['sub']))
		{
			$con=mysqli_connect("localhost","root","12345","12pm_php");
			if($con)
			{
				if($_POST['sub']=="Submit")
				{
					$eid=$_POST['eid'];
					$ename=$_POST['ename'];
					$eloc=$_POST['eloc'];
					$edesi=$_POST['edesi'];
					$esal=$_POST['esal'];
					
					$q="insert into employee values ('$eid','$ename','$eloc','$edesi','$esal')";
					$result=mysqli_query($con,$q);
					if($result)
					{
						echo "<h1>Record Inserted...</h1>";
					}
					else{
						
						echo "Not Inserted...".mysqli_error($con);
					}
					
				}
				if($_POST['sub']=="Display")
				{
					$q="select * from employee";
					$data=mysqli_query($con,$q);
					if($data){
						echo'<table border="1">
						<tr>
						<th>Eid</th>
						<th>Ename</th>
						<th>Eloc</th>
						<th>Edesi</th>
						<th>Esal</th>
						</tr>';
						while($arr=mysqli_fetch_array($data))
						{
							echo "<tr> <td>".$arr['eid']."</td><td>".$arr['ename']."</td><td>".$arr['eloc']."</td><td>".$arr['edesi']."</td><td>".$arr['esal']."</td></tr>";
						}
						echo'</table>';
						
					}
					else{
						echo mysqli_error($con);
					}
				}
				if($_POST['sub']=="CRUD")
				{
					
					header("Location:crud.php");
				}
			}
			else
			{
				echo "Db not connected....";
			}
			
		}
		?>
	</body>
</html>