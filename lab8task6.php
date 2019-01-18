<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php


function spell($num){
	$array=str_split($num);
echo $num;
echo "</br>";
for($a=0;$a< count($array);$a++){
	switch($array[$a]){
		case(0):
		echo "zero";
		break;
		echo "</br>";
		case(1):
		echo "one";
		break;
		echo "</br>";
		case(2):
		echo "two";
		break;
		echo "</br>";
		case(3):
		echo "three";
		break;
		echo "</br>";
		case(4):
		echo "four";
		break;
		echo "</br>";
		case(5):
		echo "five";
		break;
		echo "</br>";
		case(6):
		echo "six";
		break;
		echo "</br>";
		case(7):
		echo "seven";
		break;
		echo "</br>";
		case(8):
		echo "eight";
		break;
		echo "</br>";
		case(9):
		echo "nine";
		break;
		echo "</br>";
		
		}}
	
	}	
	
	spell(153);
	echo "</br>";
	
	spell(20455);
	echo "</br>";
	spell(3456);
	echo "</br>";
	
?>  

</body>
</html>