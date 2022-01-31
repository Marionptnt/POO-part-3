<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxspeed = 10;

    public function __construct($nbLane = 1, $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    
    public function addVehicule(Vehicle $vehicle)
    {
        if($vehicle instanceof Cars || $vehicle instanceof Truck)
        {                      
            $message = "Ce véhicule n'est pas autorisé";        
        }else{
            $this->currentVehicles [] = $vehicle;  
            $message = "Ce véhicule est autorisé"; 
        }
        return $message;     
    }
}

