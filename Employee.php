<?php

    class Employee {
        private $nom;
        private $sou;

        public function initialize($nom,$sou){
            $this->nom = $nom;
            $this->sou = $sou;
        }
        public function print(){
            if ($this->sou > 6000){
                $aux =" ";
            } else {
                $aux = " no ";
            }
            echo $this->nom.$aux."ha de pagar impostos\n";
        }
    }

    $juan = new Employee();
    $juan->initialize("Juan",1000);
    $juan->print();

    $juan = new Employee();
    $juan->initialize("Juan",10000);
    $juan->print();


?>