<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "Mathematical Operations";
echo "</br>";
function operation(){
	$var=func_get_args();

	if(func_num_args() == 1){
		echo "Mathematical operations are not possible because of one operand";
		echo "</br>";
		}

else if(count($var) ==2 ){
	$var1=$var[0];
	echo "first num= ".$var1;
	echo "</br>";
$var2=$var[1];
echo "second num= ".$var2;
	echo "</br>";
	echo "sum is:".($var1+$var2);
	echo "</br>";
	echo "difference is:".($var1-$var2);
	echo "</br>";
	echo "product is:".$var1*$var2;
	echo "</br>";
	echo "quotient is:".$var1/$var2;
	}
else if(count($var) ==3 ){
	$var1=$var[0];
$var2=$var[1];
$var3=$var[2];
	$var1=$var[0];
	echo "first num= ".$var1;
	echo "</br>";
$var2=$var[1];
echo "second num= ".$var2;
	echo "</br>";

$var3=$var[2];
echo "third num= ".$var2;
	echo "</br>";






	echo "sum is:".($var1+$var2+$var3);
	echo "</br>";
	echo "difference is:".($var1-$var2-$var3);
	echo "</br>";
	echo "product is:".$var1*$var2*$var3;
	echo "</br>";
	echo "quotient is:".$var1/$var2/$var3;
	}


}
operation(10,2,2);
echo "</br>";
operation(12);
echo "</br>";
operation(12,4);
 ?>





</body>
</html>