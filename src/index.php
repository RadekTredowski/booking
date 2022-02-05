<?php
/*
 *
 * Created by Waldemar Graban & Radosław Trędowski 2022
 *
 */

namespace radektredowski\Booking;

require_once "../vendor/autoload.php";

use radektredowski\Booking\Reservation\Booking;

$reservation = [
	'customerFirstName' => 'a',
	'customerLastName'  => 'b',
	'customerPhone'		=> '',
	'customerEmail'     => '',
	'checkOutDate'		=> 's',
	'checkInDate' 		=> '',
	'numberOfAdults'	=> 's',
	'numberOfChildren'   => 'h'
];

$reservation = new Booking($reservation);

