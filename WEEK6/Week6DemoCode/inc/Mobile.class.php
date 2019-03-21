<?php

// type,cpu,formFactor,RAM,Color
class Mobile {

    public $type = "";
    public $cpu_type = "";
    public $formFactor = "";
    public $RAM = 0;
    public $color = "";

    private $poweredState = false;

    public function __construct($type, $cpu_type,
    $formFactor, $RAM, $color) {
        $this->type = $type;
        $this->cpu_type = $cpu_type;
        $this->formFactor = $formFactor;
        $this->RAM = $RAM;
        $this->color = $color;
    }

    //This function turns the phone on
    public function powerOn() {
        if($this->poweredState) {
            // the phone is already on!
        }
        else {
           // the phone is off, turn it on
           $this->poweredState = true; 
           echo "Powering Phone on!<BR>";
        }
    }
    //This function turns the phone off
    public function powerOff() {
        if (!$this->poweredState) {
            // you cant turn a phonn off that already off!
            
        }
        else {
            $this->poweredState = false;
            echo "The phone has been powered off";
        }
    }
}

?>