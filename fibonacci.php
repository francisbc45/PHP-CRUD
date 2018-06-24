<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Sequence</title>
</head>
<body>
<form method="GET">
	<input type="number" name="input">
	<br>
	<button type="submit" name="submit">Submit</button>
</form>

<?php 

if(isset($_GET['submit'])){
$input = $_GET['input'];

$first = 0;
$second = 1;

echo $first. " " . $second. " ";

for($i = 2; $i < $input; $i++)
{
	$third = $first + $second;

	echo $third. " ";

	$first = $second;
	$second = $third;
}
}
 ?>
</body>
</html>