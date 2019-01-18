<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
function armstrong($num){
$sum=0;
$array = str_split($num);
$len=count($array);
echo "</br>";
for($a=0;$a<$len;$a++){
	
$sum=$sum+pow($array[$a],3);	
	}
	if($num==$sum){
		echo "$num is an angstrom number";
		}
	else { echo "$num is not an angstrom number";}
	}
armstrong(153);
echo "</br>";
armstrong(4028);
echo "</br>";
armstrong(21);
echo "</br>";
?>
<?php
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 153 Armstrong number? ".armstrong_number(153);
echo "\nIs 21 Armstrong number? ".armstrong_number(21);
echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
?>


</body>
</html>