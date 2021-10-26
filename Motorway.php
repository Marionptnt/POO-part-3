<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicule(Vehicle $vehicle)
		{
			    if($vehicle instanceof Cars) {

				$this->setCurrentVehicles($vehicle);
		        }

        }

}
