<?php
/*
 *
 * Created by Waldemar Graban & Radosław Trędowski 2022
 *
 */

require_once "../vendor/autoload.php";

namespace radektredowski\Booking;


use radektredowski\Booking\Reservation\Booking;

$reservation = [
	'customerFirstName' => 'a',
	'customerLastName'  => 'b',
	'customerPhone'		=> '',
	'customerEmail'     => '',
	'checkOutDate'		=> 's',
	'checkInDate' 		=> '',
	'numberOfAdults'	=> 's',
	'numberOfChildren'  => 'h'
];

$reservation = new Booking($reservation);

