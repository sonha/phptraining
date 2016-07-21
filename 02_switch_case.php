<?php
$thu = 2;
switch($thu) {
	case '2':
		$today = 'thu 2';
		break;
	case '6':
		$today = 'thu 6';
		break;
	default : 
		$today = "Khong biet";
		break;
}

echo "Hôm nay là : ".$today;


$number = 12;
$midle = null;
switch ($number)
{
    case 12 : // nếu $number = 12
        $midle = $number % 2; // lấy số dư
        switch ($midle)
        {
            case 0 : // nếu số dư = 0
                echo 'Số chẵn';
                break;
            default :
                echo 'Số lẽ';
                break;
        }
        break;
    default: // nếu không phải 12 thì không làm gì
        break;
}

?>