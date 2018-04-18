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
	td
	{
		border: 1px solid black;
		padding: 10px;
		font-size: 25px;
		font-family: "Century Gothic";
		width: 100px;
		text-align: center;
	}

	hr
	{
		border: none;
		background-color: black;
		height: 3px;
		width: 600px;
	}
	table
	{margin:auto; border-spacing: 8px 5px; }

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
	<div class=header>TRACKING NUMBER REPORT FOR <?php echo date("Y/m/d"); ?></div>
<hr>
<table ==>

	<?php
		$List = $_SESSION["list"];
		$max_col = 3;
		$chunks = array_chunk($List,$max_col);
		
		foreach($chunks as $key => $value){
			echo "<tr>";
			foreach($value as $k => $v)
			{
				echo "<td>".$v."</td>";
			}
			if (count($value)==$max_col){
				echo "</tr>";
			}
		}

	?>

</table>
<form action=index.php>
	<input type=submit value=back>
</form>
</body>
</html>