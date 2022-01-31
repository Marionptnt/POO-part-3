<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
	protected $nbLane = 2;
	protected $maxSpeed = 50;

	public function __construct($nbLane = 1, $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
	
	public function addVehicle(Vehicle $vehicle)
	{
		$this->currentVehicles[] = $vehicle;
	}
}
