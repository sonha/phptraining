<?php 

$student = array(
	'a' => 'Son',
	"b" => 'Cuong',
	'c' => 'Thuong',
	'd' => 'Thanh',
);

$member = array(
	0 => 'Son',
	1 => 'Cuong',
	2 => 'Thuong',
	3 => 'Thanh',
);

// Danh sách mã số sinh viên và sinh viên tương ứng
$sinhvien = array(
    'SV001' => 'Nguyễn Văn A',
    'SV002' => 'Nguyễn Văn B',
    'SV003' => 'Nguyễn Văn C',
    'SV004' => 'Nguyễn Văn D',
    'SV005' => 'Nguyễn Văn E',
    'ABC' => 'dang van cuong',
);
// for($i = 0; $i < count($student); $i++) {
// 	echo $student[$i]."<br>";
// }
foreach($student as $key => $value) {
	echo $student[$key]."<br>";
}

foreach($member as $key => $value) {
	echo $value."<br>";
}
echo "<br>";

$dem = 1;
foreach($sinhvien as $key => $value) {
	if($key == 'ABC') {
		$value = strtoupper($value);
	}
	echo "Sinh vien ".$dem." ma sinh vien ".$key." ten la ".$value."<br>";
	$dem++;	

}

?>