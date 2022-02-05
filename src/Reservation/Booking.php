<?php

namespace radektredowski\Booking\Reservation;

/**
 * Main booking class
 */
class Booking extends Book
{
	
	public $reservationFormData;

	function __construct(array $reservationFormData)
	{
		$this->setReservation($reservationFormData);
	}
}