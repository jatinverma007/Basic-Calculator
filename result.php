<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>result page</title>
</head>
<body bgcolor="#6495ed">
<h1 >
 Below is your result:
 </h1>
 </form>
 </body>
 </html>
 <?php
 $num1 = $_GET['bill'];
 $num2 = $_GET['clinton'];
 
 $operation=$_GET['steve'];
 if($operation=='add')
 {
	 $result= $num1 + $num2;
	 } 
	 else if ($operation=='subtract')
	 {
		 $result=$num1 - $num2;
		}
else if ($operation=='multiplication')
{
	$result=$num1 * $num2;
	}
else if($operation=='division')
{	
 $result = $num1/$num2;
}
else if ($operation=='power')
{
	$result = 1;
	for($i = 0; $i < $num2; $i++)
	{
		echo $i. "<br>";
	}
}
 echo $result;
 ?>