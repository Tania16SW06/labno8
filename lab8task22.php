<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<h1>Calculating Power</h1>";
function power($base,$exp){
	
$opt=$base**$exp;
echo "the base is : $base and exponent is :$exp so the output is : $opt";

}
power(2,5);
echo "</br>";
power(2,8);
echo "</br>";
power(3,5);
echo "</br>";
power(8,5);

?>	

<?php


  $num = 29.29;
  $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
  echo $f->format($num);
  //outputs Twenty-nine and two nine
?>
</body></html>