<html>
<head>
<style>

body
{
	border:1px solid black;
	background:url(bg.jpg) no-repeat;
	background-size: cover;
	//background-color: lightblue;
	text-align: center;
	padding: 170px;
	cursor: pointer;
	margin: 4px 2px;
	//box-shadow: -0 40px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.2)
}
.p
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
	border:0px solid black;
	padding:13px;
	margin:9px auto;
	border-radius:19px;
	margin-right:430px;
}
h3
{
	margin-right:30px;
	color:#fff;
}

</style>
</head>
<body>
<h3>LOGIN </h3>
<form action="process.php" method="POST">
<div>
<input type="text" name="username" id="username" placeholder="Username" class="a" required>
<br>
<input type="password" name="password" id="password" placeholder="Password" class="a" required>
<br>
<input type="submit" name="btn" class="p" value="Login">
</div>
</form>
</body>
</html>
<?php

echo "<b>Create New Account? </b>";

?>

<a href="ex.php">Click Here </a>