<?php
require_once 'model/ReservationsLogic.php';
class ReservationController {
	
	public function __construct() {
		$this->ReservationsLogic = new ReservationsLogic();
	}

	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			$todo = isset($_REQUEST['todo'])?$_REQUEST['todo']:NULL;
			switch ($todo) {
				case 'createForm':
				$this->collectCreateForm();
				break;
				case 'createReservation':
						$res_datetime = $_REQUEST['res_datetime'];
						$table_number = $_REQUEST['table_number'];
						$amount_persons = $_REQUEST['amount_persons'];


					$this->collectCreateReservation($res_datetime, $table_number, $amount_persons);
					break;
				case 'deleteReservation':
					$res_date = $_REQUEST['date'];
					$table_amount = $_REQUEST['table'];
				$this->collectDeleteReservation($res_date, $table_amount);
				break;
				default:
				$this->collectReadReservations();
				break;
			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();

		}
		
	}

	public function collectReadReservations(){
		$reservations = $this->ReservationsLogic->readReservations();
		include 'view/reservations.php';		
	}

	public function collectCreateForm(){
		include 'view/reservationsForm.php';
	}

	public function collectCreateReservation($res_datetime, $table_number, $amount_persons){
		$reservations = $this->ReservationsLogic->createReservation($res_datetime, $table_number, $amount_persons);
	}
	
	public function collectUpdateContact(){

	}		

	public function collectDeleteReservation($res_date, $table_amount){
		$reservations = $this->ReservationsLogic->deleteReservation($res_date, $table_amount);
	}
	public function __destruct(){

	}

}

?>