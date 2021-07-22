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

// Extend class here
class calculator1 extends calculator{
    public function sum1(){
        echo $this->sum();
    }
    
}

$obj = new calculator1(20,30);
echo $obj->sum1();
?>