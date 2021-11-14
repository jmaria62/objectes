<?php

    class Shape {
        protected $ample;
        protected $alt;

        public function __construct($ample,$alt){
            $this->ample = $ample; 
            $this->alt = $alt;
        }
        public function area(){
          
        }
    }

    class Triangle extends Shape {

        public function area(){
            $res = $this->ample * $this->alt / 2;
            return $res;
        }
    }

    class Rectangle extends Shape {

        public function area(){
            $res = $this->ample * $this->alt;            
            return $res;
        }
    }
    $aux1 = 10;
    $aux2 = 10;
    $t1 = new Triangle($aux1,$aux2);
    
    echo "Area triangle (".$aux1.",".$aux2.") = ". $t1->area()."\n";

    $r1 = new Rectangle($aux1,$aux2);

    echo "Area rectangle (".$aux1.",".$aux2.") = ". $r1->area()."\n";

?>