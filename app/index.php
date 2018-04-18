<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Be Organic Bath and Body</title>
	<style>
		.header
	{
		font-family: "CENTURY GOTHIC";
		text-align: center;
		font-size: 25px;
		font-weight: bold;
	}
	.form1
	{
		margin: auto;
		border: 1px solid black;
		padding: 10px;
		width: 400px;
		text-align: center;
	}
	.submit
	{
		text-transform: uppercase;
		background-color: black;
		transition: 1s;
		border: 1px solid black;
		padding: 4px;
		border-radius: 2px;
		color: white;
	}
	.submit:hover
	{
		transition: 1s;
		background-color: salmon;
		border: 1px solid salmon;
	}
</style>
</head>
<body>
<div class=header>Tracking Number Report Generator</div>
<div class=form1>
<form method=get>
	Tracking number: <input type=text name='tracknum' required minlength=4 maxlength=4><br><br>
	<input type=submit value=submit name=submit class=submit>
</form>
</div>
<br>
<div class=form1>
<div class=header>List</div><br>
<form method=get action="report.php"><input type=submit value=Generate Report name=generate class=submit></form>
<?php
if(isset($_SESSION["list"]))
{
	$List = $_SESSION["list"];
}
else
{
	$List = array();
}
if(isset($_GET["submit"])){
$_SESSION["list"]= $List;
$_SESSION["tracknum"]=$_GET["tracknum"];
array_push($_SESSION["list"],$_SESSION["tracknum"]);
foreach($_SESSION["list"] as $v1)
{
	echo $v1."<br>";
}
echo "<form method=get><input type=submit value=Clear name=clear class=submit></form>";
}
if(isset($_GET["clear"]))
{
	session_destroy();
}
?>
</form>
</div>
</body>
</html>