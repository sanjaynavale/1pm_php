<?php
session_start();
?>
<html>

<script>
function del()
{
	if(!confirm("Are U sure Want to Delete This Record...?"))
	{
		return false;
	}
	
}
</script>
<body>
	<form method="post">
	Eid:-<input type="text" name="eid"><br>
	<input type="submit" name="sub" value="Display">
	<input type="submit" name="sub" value="Delete" onclick="return del()">
	<input type="submit" name="sub" value="Edit">
	</form>
	<?php
	if(isset($_POST['sub']))
	{
		$con=mysqli_connect("localhost","root","12345","12pm_php");
		if($con)
		{
			$eid=$_POST['eid'];
			
			if($_POST['sub']=="Display")
			{
				$q="select * from employee where eid='$eid'";
				$data=mysqli_query($con,$q);
				if($data)
				{
					if(mysqli_num_rows($data)>0)
					{
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
						echo"Record Not Found...!!!";
					}
				}
				else{
					echo mysqli_error($con);
				}
			}
			if($_POST['sub']=="Delete")
			{
				$q="delete from employee where eid='$eid'";
				$data=mysqli_query($con,$q);
				if($data)
				{
					echo"<p>Record Deleted successfull....</p>";
				}
				else{
					echo mysqli_error($con);
				}
				
			}
			if($_POST['sub']=="Edit")
			{
				$_SESSION['s']=$eid;
				header("Location:edit.php");
			}
		}
		else
		{
			echo"DB Not Connected...";
		}
	}
	?>
</body>
</html>