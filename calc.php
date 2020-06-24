<?php

if(isset($_GET['submit']))
$number1=$_GET["num1"];
$number2=$_GET["num2"];
$operator=$_GET["operator"];

switch($operator)
{
	case "None";
	echo "You need to select one method";
	break;

	case "Add";
	echo $number1 + $number2;
	break;

	case "subtract";
	echo $number1 - $number2;
	break;
	
	case "Mult";
	echo $number1 * $number2;
	break;
	case "Div";
	echo $number1 / $number2;
break;
}

?>