<?php

echo "<h2>Registration Username Ans Password Then After Login</h2>";

?>
<html>
<head>
<script>

function hello()
	{
	 if(document.getElementById("i1").value=="")
		{
			alert("Enter Username");
			return false;
		}
		else if(document.getElementById("i2").value=="")
		{
			alert("Enter Password");
			return false;
		}
		
		else
		{
			alert("Account Create Successfully...");
			return true;
		}
	}
</script>
<style>

body
{
	background:url(bg.jpg) no-repeat;
	background-size:cover;
	//background-color: lightblue;
	border:2px solid black;
	text-align: center;
	padding: 0px;
	cursor: pointer;
	margin: 4px 2px;
	border-radius:19px;
	
}
h2{
	width: 600px;
    margin: 1% auto;
    padding: 20px;
	color:  #a6a8b1;
}
.p
{
	//float:right;
	background:#555;
	padding:5px 10px;
	color:#fff;
	border-radius:19px;
	margin-right:40px;
	border:none;
}
.a
{
	display:block;
	border:2px solid white;
	padding:11px;
	margin:9px auto;
	border-radius:19px;
	margin-right:600px;
}


</style>
</head>
<body>
<form name="frm1" method="post" action="insert.php">
<input type="text" name="company_name" class="a" id="i3" placeholder="Company Name"/> <br>
<input type="text" name="city" class="a" id="i4" placeholder="City"/> <br>
<input type="email" name="email" class="a" id="i5" placeholder="Email Address"/> <br>
<input type="text" name="username" class="a" id="i1" placeholder="Username"/> <br>
<input type="password" name="password" class="a" id="i2" placeholder="Password"/> <br>
<input type="submit" value="submit" class="p" onclick="hello()"/>
</form>
</body>
</html>
