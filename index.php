<?php

class Book
{
	
}





class Booking
{
	public function __construct()
	{
		$this->createNewBookConfirm();
	}

	private function createNewBookConfirm(): bool
	{
		return true;
	}

	private function isValidate(): bool
	{
		//
	}
}

$booking = new Booking();

unset $booking;


