<?php
	
	
    $length = 5.2;
	$width = 3.4;

	echo "Area: ".$length*$width."<br>";
	echo "Perimeter: ". 2*($length+$width)."<br>";
	
	echo "----------------vat---------------------<br>";
	$amount=500;
	$vat = $amount*0.15;
	echo "15% Vat of the amount 500 is: ". $amount*.15."<br>";

	
	echo "-----------------Even or odd number-------------------<br>";
	$number = 14;
	if ($number % 2 == 0) {
		echo $number." is an even number<br>";
	}else{
		echo $number." is an odd number<br>";
	}
  	
  	echo "----------------largest number-------------------<br>";
  	$num1=10;
  	$num2=50;
  	$num3=15;

  	if($num1>$num2 && $num1>$num3)
  	{
  		echo $num1." is the largest numbe<br>";
  	}
  	else if($num2>$num1 && $num2>$num3)
  	{
  		echo $num2." is the largest number<br>";
  	}
  	else
  	{
  		echo $num3." is the largest number<br>";
  	}

  	echo "----------------odd number between 10 to 100-------------------<br>";
  	for ($i=10; $i <101 ; $i++) { 
  		if ($i%2 != 0)
  		{
  			echo $i." ";
  		}	
  	}
  	echo "<br>----------------search element-------------------<br>";
  	$student=['id'=>1, 'name'=>'anik', 'cgpa'=>3.85, 'email'=>'anik@gmail.com'];

  	$cont = false;

	foreach ($student as $key => $value) {
		if($value == 'anik'){
	  		$cont = true;
	  		break;
	  	}
	}
	if($cont == true)
	{
		echo "found<br>";
	}
	else
	{
	  	echo "not found<br>";
	}


	$x=3;
	for ($i=1; $i <=$x ; ++$i) { 
		for ($j=1; $j <=$i ; ++$j) { 
			echo '*';
		}
		echo "<br>";
	}
	
	$x=3;
	for ($i=$x; $i >=1 ; --$i) { 
		for ($j=1; $j <=$i ; ++$j) { 
			echo $j;
		}
		echo "<br>";
	}


?>
