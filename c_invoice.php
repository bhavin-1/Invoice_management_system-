<?php

include 'menu.php';

$con = mysqli_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"user");
$result = mysqli_query($con,"SELECT * FROM login_user");
while($row = mysqli_fetch_array($result))
{
   echo "<h1>";
   echo "<br><br><br>";
   echo "<h1>From,</h1>";
   echo "<br>";
   echo "<b>".$row['company_name']."<b>,</b>";
   echo "<br>";
   echo " <b>" . $row['city']."<b>,</b>";
   echo "<br>";
   echo "<b> " . $row['email']."</b>";
   echo "<br />";
   echo "</h1>";
   echo "<br>";
}




	if(!empty($_POST["save"])) {
	    $conn = mysqli_connect("localhost","root","", "user");
		$itemCount = count($_POST["item_name"]);
		$itemValues=0;
		$query = "INSERT INTO invoice_order_item (item_no,item_name,item_quantity,item_price,item_total) VALUES ";
		$queryValue = "";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["item_no"][$i]) || !empty($_POST["item_name"][$i]) || !empty($_POST["item_quantity"][$i]) || !empty($_POST["item_price"][$i]) || !empty($_POST["item_total"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
				$queryValue .= "('" . $_POST["item_no"][$i] . "', '" . $_POST["item_name"][$i] . "', '" . $_POST["item_quantity"][$i] . "', '" . $_POST["item_price"][$i] . "', '" . $_POST["item_total"][$i] . "')";
			}
		}

		

		$con = mysqli_connect("localhost","root","");
		if (!$con)
		{
    			 die('Could not connect: ' . mysql_error());
		}
		mysqli_select_db($con,"user");
		$sql4="INSERT INTO invoice_order (receiver_name, receiver_address, sub_total, text_rate, text_amount, amount_paid, amount_due, total_amount)
		VALUES
		('$_POST[receiver_name]','$_POST[receiver_address]','$_POST[sub_total]','$_POST[text_rate]','$_POST[text_amount]','$_POST[amount_paid]','$_POST[amount_due]','$_POST[total_amount]')"; 

		if (!mysqli_query($con,$sql4))
		{
     			die('Error: ' . mysqli_error($con));
		}
		else{
			//echo "<h2>1 record added....";
			//header("Location:create_invoice.php");
			
			if(!empty($_POST['save']))
			{
				session_start();
				
				$a = $_POST['receiver_name'];
				$b = $_POST['receiver_address'];
				$c = $_POST['sub_total'];
				$d = $_POST['text_rate'];
				$e = $_POST['text_amount'];
				$f = $_POST['amount_paid'];
				$g = $_POST['amount_due'];
				$h = $_POST['total_amount'];


				require("fpdf/fpdf.php");
				$pdf = new FPDF();
				$pdf->AddPage();

				$pdf-> SetFont("Arial","B",14);
				$pdf -> Cell(0,10,"INVOICE MANAGEMENT SYSTEM",1,1,'C');

				$pdf -> Ln(10);
				$pdf -> Cell(0,10,"To,",0,1,'l');
				$pdf -> Cell(0,10,"$a",0,1,'l');
				$pdf -> Cell(0,10,"$b",0,1,'l');
				
				$pdf -> Ln(10);
				$pdf -> Cell(29,12,"Item No",1,0,'C');
				$pdf -> Cell(37,12,"Item Name",1,0,'C');
				$pdf -> Cell(40,12,"Item Quantity",1,0,'C');
				$pdf -> Cell(38,12,"Item Price",1,0,'C');
				$pdf -> Cell(0,12,"Total",1,1,'C');
					
				$itemCount = count($_POST["item_no"]);

				for($y=0;$y<$itemCount;$y++) 
				{
					$a1 = $_POST['item_no'][$y];
					$a2 = $_POST['item_name'][$y];
					$a3 = $_POST['item_quantity'][$y];
					$a4 = $_POST['item_price'][$y];
					$a5 = $_POST['item_total'][$y];

					
				
					$pdf -> Cell(29,10,"$a1",1,0,'C');
					$pdf -> Cell(37,10,"$a2",1,0,'C');
					$pdf -> Cell(40,10,"$a3",1,0,'C');
					$pdf -> Cell(38,10,"$a4",1,0,'C');
					$pdf -> Cell(0,10,"$a5",1,1,'C');
				}
				
				$pdf -> Ln(10);
				
				$pdf -> Cell(144,10,"Item Total:",1,0,'R');
       			        $pdf -> Cell(0,10,"$c",1,1,'C');

				$pdf -> Cell(144,10,"Text Rate:",1,0,'R');
       			        $pdf -> Cell(0,10,"$d",1,1,'C');
				
				$pdf -> Cell(144,10,"Text Amount:",1,0,'R');
       			        $pdf -> Cell(0,10,"$e",1,1,'C');

				$pdf -> Cell(144,10,"Amount Paid:",1,0,'R');
       			        $pdf -> Cell(0,10,"$f",1,1,'C');

				$pdf -> Cell(144,10,"Amount Due:",1,0,'R');
       			        $pdf -> Cell(0,10,"$g",1,1,'C');

				$pdf -> Cell(144,10,"Total Amount:",1,0,'R');
       			        $pdf -> Cell(0,10,"$h",1,1,'C');

				$pdf->output();

	

		}


		}
		
		$sql = $query.$queryValue;
		if($itemValues!=0) {
		    $result = mysqli_query($conn, $sql);
			if(!empty($result)) $message = "Added Successfully.";

			
		}

		
}


?>
<HTML>
<HEAD>
<TITLE>PHP jQuery Dynamic Textbox</TITLE>
<LINK href="style.css" rel="stylesheet" type="text/css" />

<script src="jquery-1.9.1.min.js"></script>
<SCRIPT>



$(document).ready(function(){
		$("#st,#tr,#ta,#ap,#ad,#tamount").keyup(function(){
		
		

		var x = 0.0;
		var y = 0.0;
		var z = 0.0;
		var s = 0.0;
		var x = Number($("#st").val());
		var y = Number($("#tr").val());
		var z = x * y / 100;
		$("#ta").val(z);	
		
		var s = Number($("#ap").val());
		var p = Number($("#ad").val())
		var k = x + z - s;
		$("#ad").val(k);

		var l = 0.0;
		var l = x + z;
		$("#tamount").val(l);

		});
			
		
		
	}); 
</SCRIPT>



<style>
body
{
	//border:1px solid black;
	background:url(bg.jpg) no-repeat;
	background-size: cover;
	//background-color: lightblue;
	//text-align: center;
	//padding: 170px;
	cursor: pointer;
	//margin: 4px 2px;
	
}
.p
{
	//float:right;
	background:#4CAF50;
	//#555;
	padding:5px 10px;
	color:#fff;
	border-radius:2px;
	margin-right:-105px;
	border:none;
	width:14.5%;
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
#a
{
	display:block;
	border:0px solid black;
	background:#1113;
	//background:#6a2kca;
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







</HEAD>
<body>

<form action="" method="post">

<h1>To,</h1><br>
<input type="text" name="receiver_name" class="a"  placeholder="Compay Name"><br>
<textarea rows=3 cols=21 placeholder="Compay Address"  class="a" name="receiver_address"></textarea>
<br>


  <table>
    <thead>
      <tr>
	<th>No</th>
	<th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	<td><input type="text" class="no" id="a" name="item_no[]" placeholder="Item No"></td>
	<td><input type="text" class="name" id="a" name="item_name[]" placeholder="Item Name"></td>
        <td><input type="text" class="qty" id="a" name="item_quantity[]" placeholder="Item Quantity"></td>
        <td><input type="text" class="price" id="a" name="item_price[]" placeholder="Item Price"></td>
        <td><input type="text" class="total" id="a" name="item_total[]" placeholder="Item Total"></td>
      </tr>
    </tbody>
	
	
  </table><br>
  <tr><td>
	<input type="button" value="+Add More" class="p" id="append"><br></td></tr><br><br>

<b>Sub Total:</b>
<input type="text" id="st" class="a" name="sub_total" placeholder="Sub Total"><br>
	
<b>Text Rate:</b>
<input type="text" id="tr" class="a" name="text_rate" placeholder="Text Rate"><br>

<b>Text Amount:</b>
<input type="text" id="ta" class="a" name="text_amount" placeholder="Text Amount"><br>

<b>Amount Paid:</b>
<input type="text" id="ap" class="a" name="amount_paid" placeholder="Amount Paid"><br>

<b>Amount Due:</b>
<input type="text" id="ad" class="a" name="amount_due" placeholder="Amount Due"><br>

<b>Total_Amount</b>
<input type="text" id="tamount" class="a" name="total_amount" placeholder="Amount Due"><br>

  <input type="submit" name="save" class="p" value="Save" /><br><br>
</form>
<script>
  (function() {
    "use strict";
    $("table").on("change", "input", function() {
      var row = $(this).closest("tr");
      var qty = parseFloat(row.find(".qty").val());
      var price = parseFloat(row.find(".price").val());
      var total = qty * price;
      row.find(".total").val(isNaN(total) ? "" : total);
    });
    $(document).ready(function(){
		$("#append").click(function(){
			$("tbody").append("<tr><td><input type='text' class='name' id='a' name='item_no[]' placeholder='Item No'></td><td><input type='text' class='name' id='a' name='item_name[]' placeholder='Item Name'></td><td><input type='text' class='qty' id='a' name='item_quantity[]' placeholder='Item Quantity'></td><td><input type='text' class='price' id='a' name='item_price[]' placeholder='Item Price'></td><td><input type='text' class='total' id='a' name='item_total[]' placeholder='Item Total'></td></tr>");
		});		
	});
  })();

</script>


</BODY>
</HTML>