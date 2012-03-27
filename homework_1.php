<html>
<body>
<form action="homework_1.php" method="get">
Number: <input type="text" name="number" />
<input type="submit" />
</form>
<?php 
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
	
	if(array_key_exists("number", $_GET) == NULL)
		exit();
	$num = $_GET["number"];
	if(!is_numeric($num))
	{
		echo '<font color="red">' . "The parameter is not a number" . '</font><br>'; 
	}
	else if($num < 0 || $num >19999)
	{
		echo '<font color="red">' . "The parameter is not within the range [0,19999]" . '</font><br>'; 
	}
	else
	{
		if(is_prime($num) == 1)
			echo '<font color="black">' . "The number " . $num . " is prime !" . '</font><br>';
		else
			echo '<font color="blue">' . "The number " . $num . " is NOT prime !" . '</font><br>';
	}
?>
</body>
</html>