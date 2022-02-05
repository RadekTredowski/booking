<?php 

namespace radektredowski\Booking\Reservation;

use radektredowski\Booking\Reservation\Helpers\ReservationPropertyEnum;

abstract class Book
{
	public function setReservation(array $reservationFormData)
	{
		$unvalidateData = $this->isValidate($reservationFormData); 


		if(!empty($unvalidateData)){

			$message = [
				'message' => 'Wygląda na to, że poniższe pola formularza nie zostały wypełnione...',
				'error' => $unvalidateData
			];

			return $this->showErrorMessage($message);

		} else {
			var_dump('Wstępna walidacja pól formularza pozytywna. Można pisać obsługę dalszego procesu!');
		}
	}

	private function isValidate(array $reservationFormData): array
	{
		$validationResults = $this->validateFormData($reservationFormData);

		$errors = [];
		foreach ($validationResults as $result){

			if($result['isValid'] == 0){
				$errors[] = $result['key'];
			}
		}

		return $errors;
	}

	private function validateFormData(array $reservationFormData): array
	{
		$validationResults = [];

		foreach ($reservationFormData as $property => $value) {
			$res = ($this->isPropertyCorrect($property)) && (!empty($value))
				? ['key' => $property, 'isValid' => 1]
				: ['key' => $property, 'isValid' => 0];

			$validationResults[] = $res;
		}

		return $validationResults;
	}

	private function isPropertyCorrect(string $property): bool
	{
		return in_array($property, ReservationPropertyEnum::getRequiredProperties());
	}

	public function showErrorMessage($message)
	{
		echo '<div style="padding: 30px;">';
		echo '<h4>' . $message['message'] .  '</h4>';
		echo '<ul>';
		foreach($message['error'] as $error){
			echo '<li>';
			echo nl2br($error . "\n");
			echo '</li>';
		}
		echo '</ul>';
		echo '</div>';
	}
}