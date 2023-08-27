<?php


$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
$loginError = "";
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"user");

$result = mysqli_query($con,"select * from login_user where username = '$username' and password = '$password'") or die("Fail". mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password)
{
	//echo "<b>login successfully........</b>";
	header("Location:invoice_list.php");
}
else
{
	echo "Fail";
	header("Location:login.php");
}

mysqli_close($con);
?>