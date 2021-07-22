<?php 
echo "Shawon coding...<br>";

	class calculator{
		public $a, $b, $c;
	
		public function sum(){
			$this->c = $this->a + $this->b;
			return $this->c;
		}
	}
	
	/* Create object */
	$obj = new calculator;
	$obj->a = 70;
	$obj->b = 30;
	
	echo "Sum=". $obj->sum();
?>