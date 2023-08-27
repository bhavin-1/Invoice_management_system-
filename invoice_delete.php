<html>
<head>
<style>

.y
{
	//float:right;
	background:#555;
	padding:5px 10px;
	color:#fff;
	border-radius:19px;
	margin-right:-105px;
	border:none;
}


.a
{
	display:block;
	border:1px solid white;
	background:#1113;
	padding:13px;
	//margin:9px auto;
	border-radius:1px;
	//margin-right:430px;
}


</style>
</head>
<body>
<form action="" method="POST">
<br>
<input type="text" name="id" class="a" placeholder="Enter Customer Name"/><br>
<input type="submit" name="delete" class="y" value="Delete">




</form>
</body>
</html>

<?php

$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'user');

if (isset($_POST['delete']))
{

	$id = $_POST['id'];

	$query = "DELETE FROM invoice_order where receiver_name='$id'";
	$query_run = mysqli_query($con,$query);

	if($query_run)
	{
		//echo "delete";
		header('location:invoice_list.php');
	}
	else
	{
		echo "not delete";
	}
}





?>