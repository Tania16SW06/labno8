<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="lab8task8.php">
EMAIL:<input type="name" name="email" >
</br></br>
<button type="submit" name="submit">DONE</button></form>
<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	echo "the email that you entered is : $email";
	echo "</br>";
	if(strlen($email)<20){
		
if(preg_match("^[a-z]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){

	echo "your email is valiad";
	echo "</br>";
	}	
else {
	echo "your email is not valid";
	echo "</br>";
	}	}
	else{
		echo "length is greater";}
	
	
	
	
	
	
	
	}



?>
</body>
</html>