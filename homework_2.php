<?php
	define("C1", 146);
	define("C2", 284);
	define("C3", 871);
	$array = range(20, 1000, 37);
	$prime_3 = find_3_prime($array);
	echo '<p> Third prime in the array: ' . $prime_3 . '</p><br>';
	check_exists($array);
	
	function is_prime($n)
	{
		if($n == 1 || $n == 0)
		{
			return 0;
		}
		else
		{
			for($i = 2; $i <= sqrt($n); $i++)
			{
				if($n % $i == 0)
					return 0;
			}
			return 1;
		}	
	}

	function find_3_prime($array)
	{
		$current_prime = 0;
		$counter = 0;
		foreach($array as $num)
		{	
			if($counter == 3)
				return $current_prime;
			else
			{
				if(is_prime($num))
				{
					$current_prime = $num;
					$counter++;
				}
			}
			
		}
	}
	function check_exists($array)
	{
		check_exists_print(C1, $array);
		check_exists_print(C2, $array);
		check_exists_print(C3, $array);
	}
	function check_exists_print($num, $array)
	{
		if(in_array($num, $array))
			echo "The number " . $num . " exists in the array<br>";
		else
			echo "The number ". $num ." does not exist in the array<br>";

	}


	
	
	

?>