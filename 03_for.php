<?php 
// for($i = 0; $i < 7; $i++) {
// 	// echo "Day la so".$i."<br>";
// 	echo $i."<br>";
// }

$student = array(
	0 => 'Son',
	1 => 'Cuong',
	2 => 'Thuong',
	3 => 'Thanh',
);
// for($i = 0; $i < count($student); $i++) {
// 	echo "thanh vien thu ".$i." la ".$student[$i]."<br>";
// }

// echo "<br>";

// for ($i = 1; $i < 10; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo '<br/>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
		</tr> 
		
		<?php 
			for($i = 0; $i < count($student); $i++) {
				echo "<tr>
						<td>$i</td>
						<td>$student[$i]</td>
					  </tr>";
			}
		?>
	</table>
</body>
</html>