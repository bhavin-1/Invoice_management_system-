<?php
$con = @mysqli_connect("localhost","root","");
if($con)
{
     echo "MySQL successfully connected....";
}
if(!$con)
{
     die('Could not connect: ' . mysqli_error($con));
}

if(mysqli_query($con, "CREATE DATABASE user"))
{
    echo "Database created successfully......";
}
else
{
    echo "Error creating database: ".mysqli_error($con);
}
mysqli_select_db($con,"user");

$sql = "CREATE TABLE login_user
(
	company_name varchar(15),
	city varchar(15),
	email varchar(20),
	username varchar(15),
	password varchar(15)
)";
//mysqli_query($sql, $con);

if(!(mysqli_query($con,$sql)))
{
   echo "Error in table Creation :".mysqli_error($con);
   echo "<br>Error :". mysqli_errno($con)."==".mysqli_error($con);
}
else
     echo "<h2>Table Created successfully....";



$sql1 = "CREATE TABLE invoice_order_item
(
	item_no varchar(20),
	item_name varchar(20),
	item_quantity varchar(20),
	item_price varchar(20),
	item_total varchar(20)
)";
//mysqli_query($sql, $con);

if(!(mysqli_query($con,$sql1)))
{
   echo "Error in table Creation :".mysqli_error($con);
   echo "<br>Error :". mysqli_errno($con)."==".mysqli_error($con);
}
else
     echo "<h2>Table Created successfully....";





$sql2 = "CREATE TABLE invoice_order
(
	receiver_name varchar(25),
	receiver_address varchar(50),
	sub_total varchar(25),
	text_rate varchar(25),
	text_amount varchar(25),
	amount_paid varchar(25),
	amount_due varchar(25),
	total_amount varchar(25)	
)";
//mysqli_query($sql, $con);

if(!(mysqli_query($con,$sql2)))
{
   echo "Error in table Creation :".mysqli_error($con);
   echo "<br>Error :". mysqli_errno($con)."==".mysqli_error($con);
}
else
     echo "<h2>Table Created successfully....";






























mysqli_close($con);
?>
