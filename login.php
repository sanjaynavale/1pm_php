<?php session_start(); ?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg.php">Registartion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	</div>
</nav>
</div>
<br>
<br>
<div class="container">
<h1>Login Form</h1>
<form method="post">
	<div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="uname" id="username" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass"id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="sub">Login</button>
</form>
</div>

<?php
if(isset($_POST['sub']))
{
	$con=mysqli_connect("localhost","root","12345","shubham_blog");
	if($con)
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$q=mysqli_query($con,"select * from reg where uname='$uname' and password='$pass'");
		if(mysqli_num_rows($q)>0)
		{
			$_SESSION['s']=$uname;
			header("Location:welcome.php");
		}
		else
		{
			echo"<div class='alert alert-danger'>Username and password doest match.. ...try again</div>";
		}
	}
}
?>
</body>
</html>