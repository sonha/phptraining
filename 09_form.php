<?php 
session_start();
$student = array(
	0 => array(
		"id" => 1,
		"name" => "Thanh",
		),
	1 => array(
		"id" => 2,
		"name" => "Thuong",
		)
	);

if(!isset($_SESSION['student'])) {
	$_SESSION['student'] = $student;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Form Demo</h1>
	<form action="09_action.php" method="post">
		<input type="text" name="id">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>