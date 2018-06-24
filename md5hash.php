<!DOCTYPE html>
<html>
<head>
	<title>MD5 Hashing</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="input" placeholder="Input Text Here">
		<button type="submit" name="subb">Make it MD5</button>


<?php 

if (isset($_POST['subb'])) {
	
	$mdpayb = $_POST['input'];

	echo "This is the hashed string: " .md5($mdpayb);
}


 ?>

	</form>
</body>
</html>