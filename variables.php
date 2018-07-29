<?php 
	
	$num_1= 123;
	$num_2= '123';

	$sum = $num_1 + $num_2;

	echo $sum;
	
	$sum = $sum + $num_1;
	echo "<br>";

	echo $sum;

	echo "<br>";
	echo "<br>";


	const PIE_VALUE = 3.14;

	define('PIE_VALUE_1', 3.1416);

		echo PIE_VALUE;
		echo "<br>";
		echo "<br>";

		echo PIE_VALUE_1;

		$sum_of_PIE = PIE_VALUE+PIE_VALUE_1;

		echo "<br>";
		echo "<br>";

		echo $sum_of_PIE;

 ?>