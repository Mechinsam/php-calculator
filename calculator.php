<?php
	$number1 = (int)$_GET["number1"];
	$number2 = (int)$_GET["number2"];

	$operator = $_GET["operator"];

	$result = match ($operator)
	{
		"+" => $result = $number1 + $number2,
		"-" => $result = $number1 - $number2,
		"*" => $result = $number1 * $number2,
		"/" => $result = $number1 / $number2
	};

	/*if ($operator == "+")
	{
		$result = $number1 + $number2;
	}
	else if ($operator == "-")
	{
		$result = $number1 - $number2;
	}
	else if ($operator == "*")
	{
		$result = $number1 * $number2;
	}
	else if ($operator == "/")
	{
		$result = $number1 / $number2;
	}*/

	echo "<p>$number1 $operator $number2 = $result</p>";
?>
