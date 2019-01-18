
<?php 
session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form class="form-group" method="post" action="lab8task7.php">
NAME:<input type="text" name="name" />
<br /><br />
PHNNO:<input type="number" name="number" />
<br /><br />
<button type="submit" name="submit">DONE</button>

</form>

<?php
// session_start();
if(isset($_POST['submit'])){      
//$_SESSION['directory']=array();
$name=$_POST['name'];
$number=$_POST['number']; 
if(empty($_SESSION['directory']))
{
$_SESSION['directory']=array();

}
//array_push($_SESSION['directory'] = array(
  //  $name => $number));
array_push($_SESSION['directory'],array( $name => $number));

//print_r($_SESSION['directory']);}
  foreach($_SESSION['directory'] as $key=>$value)
{ 

echo "your name and number is: ".json_encode($value);
echo "</br>";    // echo $_SESSION['directory'][$i];
}}  
?>


</body>
</html>