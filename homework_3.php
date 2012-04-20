<?php
class Singleton
{
	static $instance;
	private function __construct()
	{
		echo "Object constructed.</br>";
	}

	public static function get_instance()
	{
		if(!isset(self::$instance))
		{
			$classname = __CLASS__;
			self::$instance = new $classname;
		}
		return self::$instance;
	}
	
	public function say_hello()
	{
		echo "Hello!</br></br>";
	}
}
echo Singleton::get_instance()->say_hello();

class Factory{
	public static function make_pizza($type)
	{
		return new $type;		
	}
}

class Pepperoni{
	function __construct() {
       echo "Pepperoni pizza was made.</br>";
   }
}
class Vegetariana{
	function __construct() {
		echo "Vegetariana pizza was made.</br>";
	}
}

$pepperoni = Factory::make_pizza('Pepperoni');
$vegetariana = Factory::make_pizza('Vegetariana');

class Adaptee{
	public function do_work()
	{
		echo "<p>Some work is done by the adaptee.</p>";
	}
}

class Adapter{
	private $a = null;
	public function __construct()
	{
		echo "<p>Adapter constructed.</p>";
	}
	public function DO_WORK()
	{
		$this->a = new Adaptee();
		$this->a->do_work();
	}
}

$adapter = new Adapter();
$adapter->DO_WORK();

class StudyingStudent
{
	public function __construct()
	{
		$this->copy_lectures();
	}
	private function copy_lectures()
	{
		echo "Copying lectures...</br>";
	}
	public function study()
	{
		echo "Student studying...</br>";
	}
}
class Proxy
{
	private $student;

	public function study()
	{
		if(!isset($student))
		{
			$this->student = new StudyingStudent();
		}
		$this->student->study();
	}
}

$student1 = new Proxy();
$student2 = new Proxy();

$student1->study();
$student1->study();
$student2->study();
$student2->study();
$student1->study();
?>