<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
echo "<h1>Task:1 Factorial</h1>";

function fact($num){

$factorial = 1;
for ($a=$num; $a>=1; $a--) 
{
  $factorial = $factorial * $a;
}
echo "Factorial of $num is $factorial";

}

fact(6);
echo "</br>";
fact(5);
echo "</br>";
fact(4);
echo "</br>";
fact(10);
?>

</body>
</html>