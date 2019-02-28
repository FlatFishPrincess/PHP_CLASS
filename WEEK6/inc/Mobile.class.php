<?php 

    // Syntax for normal variable: 
        // $this -> var  : here, make sure no $ sign!!
    // Type, cpu, formfactor, ram, color
    class Mobile {
        public $type = "";
        public $cpu_type = "";
        public $formFactor = "";
        public $RAM = 0;
        public $color = "";

        private $poweredState = false;

        public function __construct($type, $cpu_type, $formFactor, $RAM, $color){
            $this->type = $type;
            $this->cpu_type = $cpu_type;
            $this->formFactor = $formFactor;
            $this->RAM = $RAM;
            $this->color = $color;
        }

        public function powerOn(){
            if($this->poweredState){
                // The phone is already on
            } else {
                // The phone is off, turn it on
                $this->poweredState = true;
                echo "Powering Phone on!<br>";
            }
        }

        public function powerOff(){
            if(!$this->poweredState){
                // you can't turn a phone off that's aleready off
            } else {
                $this->poweredState = false;
                echo "The phone has been powered off<br>";
            }
        }
    }
?>