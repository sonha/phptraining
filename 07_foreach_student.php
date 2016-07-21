<?php 
$student = array(
	0 => array(
			"id" => 1,
			"name" => 'Dang Van Cuong',
			"age" => 23
		),
	5 => array(
			"id" => 5,
			"name" => 'Dang Van Cuong 5',
			"age" => 27
		),
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px solid">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Age</td>
		</tr>
		<?php foreach($student as $key => $value) {
			echo "<tr>
					<td>".$value["id"]."</td>
					<td>".$value["name"]."</td>
					<td>".$value["age"]."</td>
				</tr>";
		}?>
		<?php foreach($student as $key => $value) { ?>
				<tr>
					<td><?php echo $value["id"];?></td>
					<td><?php echo $value["name"];?></td>
					<td><?php echo $value["age"];?></td>
				</tr>
		<?php }?>
	</table>
</body>
</html>