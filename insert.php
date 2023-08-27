<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
     die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"user");
$sql="INSERT INTO login_user (company_name, city, email, username, password)
VALUES
('$_POST[company_name]','$_POST[city]','$_POST[email]','$_POST[username]','$_POST[password]')";
if (!mysqli_query($con,$sql))
{
     die('Error: ' . mysqli_error($con));
}
else{
//echo "<h2>1 record added....";
header("Location:login.php");
}
mysqli_close($con) ;
?>
