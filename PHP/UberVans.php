<?php

require_once('Car.php');

class UberVans extends Car {
    public $typeCarAccepted;
    public $SeatsMaterial;
    

    public function __construct($license,$driver,$typeCarAccepted,$SeatsMaterial){
        parent::__construct($license,$driver);
        $this->typeCarAccepted= $typeCarAccepted;
        $this->SeatsMaterial = $SeatsMaterial;
    }

    public function setPassengers($passengers){
        if($passengers  ==6){
            $this->passengers = $passengers;
        }else{
            echo "Necesitas asignar 6 puestos" ;
        }
    }
}