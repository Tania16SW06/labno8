<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
echo "METHOD 1";
echo "</br>";
function test1($a=null,$b=null,$c=null){
	echo "fuction with arguments $a $b $c";
	echo "<br>";
	}

test1(10,3,4);
echo "<br>";
test1(10,3);
echo "<br>";
test1(10);
echo "<br>";
//using magic method
class 	test{
	function __call($name,$arg){
		if($name=='test1'){
			echo "Method 2.</br>";
			echo "Inside test1.</br>";
			switch(count($arg)){
				case 0:
				echo "no argument";
				break;
				case 1:
				echo "one argument".$arg[0];
				echo "</br>";break;
				case 2:
				echo "two argument".$arg[0].$arg[1];break;
				case 3:
				echo "three argument".$arg[0].$arg[1].$arg[2];break;
				case 4:
				echo "four argument".$arg[3];break;
}
}
}}

$obj=new test();
$obj->test1(1,2,3);
echo "</br>";
$obj->test1(1,2);
echo "</br>";
$obj->test1(1);


echo "</br>";
echo "Method 3";
echo "</br>";
function test3(){
	if(func_num_args()==0){
		echo  "no argument";
		}
		
		elseif(func_num_args()==1){
			$arr=func_get_args();
		echo " 1argument".$arr[0];
		}
		
		elseif(func_num_args()==2){
			$arr=func_get_args();
		echo "2 argument".$arr[0].$arr[1];
		}
		elseif(func_num_args()==3){
		$arr=func_get_args();
		echo "3 argument".$arr[0].$arr[1].$arr[2];
		}
	}
test3(1,2,3);
echo "</br>";
test3(1,2);
echo "</br>";
test3(1);
echo "</br>";

//flat operator
echo "</br>";
 
echo "Method 4"; 
echo "</br>";
function testdot(...$a){
	foreach($a as $b){
		echo $b."</br>";
		}
	}
echo "</br>";
testdot();
testdot(1);
testdot(2,"Tania");

?>
</body>
</html>