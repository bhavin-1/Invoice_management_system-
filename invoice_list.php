<?php

include 'menu.php';
echo "<br>";
//include 'invoice_delete.php';
$con = @mysqli_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"user");
$result = mysqli_query($con,"SELECT * FROM invoice_order");
echo "<br><br><br><br><table border='0' style='border:1px solid black; width:70%;'><tr><th align='left'>Invoice No</th><th align='left'>Create Date&Time</th><th align='left'>Customer Name</th><th align='left'>Text Rate(%)</th><th align='left'>Amount Due</th><th align='left'>Amount Paid</th><th align='left'>Invoice Total</th></tr>";
echo "<tr></tr><tr></tr>";
while($row = mysqli_fetch_array($result))
{
   echo "<tr></tr><tr></tr><tr></tr>";
   echo "<tr>";
   echo "<td>" . $row['Invoice_no'] . "</td>";
   echo "<td>" . $row['create_date'] . "</td>";
   echo "<td>" . $row['receiver_name'] . "</td>";
   echo "<td>" . $row['text_rate'] . "</td>";
   echo "<td>" . $row['amount_due'] . "</td>";
   echo "<td>" . $row['amount_paid'] . "</td>";
   echo "<td>" . $row['total_amount'] . "</td>";
   echo "</tr>";
}
echo "</table>";
include 'invoice_delete.php';
mysqli_close($con); 
?>
<style>

table
{
	//padding: 170px;
	margin-right:-105px;
}

body
{
	border:1px solid black;
	background:url(bg.jpg) no-repeat;
	//background-size: cover;
	//background-color: lightblue;
	//text-align: center;
	//padding: 170px;
	cursor: pointer;
	//margin: 4px 2px;
	
}
.p
{
	//float:right;
	background:#555;
	padding:5px 10px;
	color:#fff;
	border-radius:2px;
	margin-right:-105px;
	border:none;
	width:100%;
}
.a
{
	display:block;
	border:0px solid black;
	background:#1113;
	padding:13px;
	//margin:9px auto;
	border-radius:1px;
	//margin-right:430px;
}
h1
{
	margin-right:30px;
	color:#12345;
}
td
{
	margin-right:30px;
	color:#12345;
}

</style>