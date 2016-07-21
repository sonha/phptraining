<?php 
$a = 123;

//so sanh bang thi dung dau ==
// so sanh khac thi dung !=
if($a%2 == 0) {
	if($a > 100) {
		echo "La so chan va lon hon 100";
	} else {
		echo 'La so chan va nho hon 100';
	}
} else {
	if($a > 100) {
		echo "La so le va lon hon 100";
	} else {
		echo 'La so le va nho hon 100';
	}
}
?>