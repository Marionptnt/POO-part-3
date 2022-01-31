<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function __construct($nbLane, $maxSpeed)
    {         
        parent::__construct($nbLane, $maxSpeed);     
    }

    public function addVehicle(Vehicle $vehicle): string
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
        {                      
            $message = "Ce véhicule n'est pas autorisé";        
        }else{
            $this->currentVehicles [] = $vehicle;  
            $message = "Ce véhicule est autorisé"; 
        }
        return $message;     
     
    }
}
