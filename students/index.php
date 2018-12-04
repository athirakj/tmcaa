<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMCAA</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/register-front-page.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!---------header section--------->
<?php include('../admin/classes/class_db.php');?>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form  action="#" method="post">
    <input type="text" name="email2" placeholder="Username">
    <input type="password" name="password" placeholder="Password" required>
	<input type="submit" name="login" value="Login" class="login login-submit">
  </form>

  <div class="login-help">
    <a href="http://mediacrow.com/tmcaa-registration/register.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>
<?php
if(isset($_POST['login']))
{
	// $_POST[email2];
	$sql_one="select * from login where username = '$_POST[email2]' and password = '$_POST[password]'";
	
	$sql_two="select * from registered_stu where email = '$_POST[email2]' limit 1";

	$result=mysqli_query($db,$sql_one);
if	($result->num_rows>0)	
{
	$result2=mysqli_query($db,$sql_two);	
	$row2 = mysqli_fetch_assoc($result2);
	session_start();
	$_SESSION["id"] = $_POST[email2];
	$_SESSION["StuData"] = $row2;
	$row = mysqli_fetch_assoc($result);
if( $row['user_type'] =="admin")
header("Location: ../admin/register.php");
else
header("Location: profile.php"); 
}
else
{
	
	echo '<script language="javascript"> alert("Login Failed"); </script>';
}
} 
?>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

 <!-- <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>-->

</body>

</html>