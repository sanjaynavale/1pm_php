<?php
session_start();
$eid=$_SESSION['s'];
$con=mysqli_connect("localhost","root","12345","12pm_php");
	$q="select * from employee where eid='$eid'";
	$data=mysqli_query($con,$q);
	$arr=mysqli_fetch_array($data);

?>
<form method="post">
		Eid:<input type="text" name="eid" disabled value="<?php echo $arr['eid'];?>"><br>
		Ename:<input type="text" name="ename" value="<?php echo $arr['ename'];?>"><br>
		Eloc :<input type="text" name="eloc" value="<?php echo $arr['eloc'];?>"><br>
		Edesi:<input type="text" name="edesi" value="<?php echo $arr['edesi'];?>"><br>
		Esal:<input type="text" name="esal" value="<?php echo $arr['esal'];?>"><br>
		<input type="submit" value="Update" name="sub">
		
</form>

<?php
	if(isset($_POST['sub']))
	{
		$con=mysqli_connect("localhost","root","12345","12pm_php");
		$eid=$_SESSION['s'];
		$ename=$_POST['ename'];
		$eloc=$_POST['eloc'];
		$edesi=$_POST['edesi'];
		$esal=$_POST['esal'];
		
		$q="update employee set ename='$ename',eloc='$eloc',edesi='$edesi',esal='$esal' where eid='$eid'";
		$data=mysqli_query($con,$q);
		if($data)
		{
			echo"<script>alert('Record Updated...');window.location='crud.php';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
		
		
	}
?>
