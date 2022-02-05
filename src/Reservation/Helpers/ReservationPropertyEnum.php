<?php

namespace radektredowski\Booking\Reservation\Helpers;

/**
 * Reservation Property
 */
class ReservationPropertyEnum
{	
	const CUSTOMER_FIRST_NAME = 'customerFirstName';
	const CUSTOMER_LAST_NAME = 'customerLastName';
	const CUSTOMER_PHONE = 'customerPhone';
	const CUSTOMER_EMAIL = 'customerEmail';
	const CHECKOUT_DATE = 'checkOutDate';
	const CHECKIN_DATE = 'checkInDate';
	const NUMBER_OF_ADULTS = 'numberOfAdults';
	const NUMBER_OF_CHILDRE = 'numberOfChildren';

	public static function getRequiredProperties(): Array
	{
		return [
			self::CUSTOMER_FIRST_NAME,
			self::CUSTOMER_LAST_NAME,
			self::CUSTOMER_PHONE,
			self::CUSTOMER_EMAIL,
			self::CHECKOUT_DATE,
			self::CHECKIN_DATE,
			self::NUMBER_OF_ADULTS,
			self::NUMBER_OF_CHILDRE
		];	
	}
}

