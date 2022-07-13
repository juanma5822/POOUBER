<?php

require_once('Car.php');

class UberBlack extends Car {
    public $typeCarAccepted;
    public $SeatsMaterial;
    

    public function __construct($license,$driver,$typeCarAccepted,$SeatsMaterial){
        parent::__construct($license,$driver)
        $this->typeCarAccepted= $typeCarAccepted;
        $this->SeatsMaterial = $SeatsMaterial;
    }
}