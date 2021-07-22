<?php 
    class calculator{
        public $a, $b, $c;

        public function __construct($x = 0, $y = 0){
            $this->a = $x;
            $this->b = $y;
        }

        public function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }
    }

    $obj1 = new calculator(20,30);
    echo $obj1->sum();

    echo "<br>";

    $obj2 = new calculator(20);
    echo $obj2->sum();
?>