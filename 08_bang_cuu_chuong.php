<?php
$number = array(1,2,3,4,5,6,7,8,9,10);
$tong = 0;
for($i = 0; $i< count($number); $i++) {
	$tong = $tong + $number[$i];
}
echo $tong;
?>