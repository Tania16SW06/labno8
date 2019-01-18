<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>SUPER GLOBALS IN PHP</h1>
<P>Several predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
<pre>
The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION</pre></P>
<?php 

$a=10;
$b=10;
function addition(){
	$GLOBALS['var']=$GLOBALS['a']+$GLOBALS['b'];
	echo $GLOBALS['var'];
	}
echo addition();
echo "</br>";
echo $GLOBALS['var'];
echo "</br>";
echo "</br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
?><form action="#" method="get">
Name:<input type="name"  name="name" />
Pass:<input type="password" name="pass" />
<input type="submit" name = "submit" ></form>

<?php if( isset($_GET['submit'])){
if($_SERVER['REQUEST_METHOD']=="GET"){
	$name=$_GET['name'];
	$pass=$_REQUEST['pass'];
		
	echo $name."</br>";
	echo $pass;
	 echo "</br>";
echo $_GET['name'];
	}
}
	 echo "</br>";
	 	 echo "</br>";
$cookie_name = "tania";
$cookie_value = "16sw06";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 


if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is set!";
} else {

     echo "Cookie '" . $cookie_name . "' is not set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>