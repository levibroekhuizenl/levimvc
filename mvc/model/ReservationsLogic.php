<?php
require_once 'model/DataHandler.php';
require_once 'model/OutputData.php';

class ReservationsLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'mvc' ,'root' ,'');
		$this->OutputData = new OutputData();
	}

	public function createReservation($res_datetime, $table_number, $amount_persons){
		try { 
			$sql = "INSERT INTO reservations (res_date, table_number, amount_persons) VALUES ('$res_datetime', '$table_number', '$amount_persons') ";
			$results = $this->DataHandler->createData($sql); 
		   }catch (Exception $e)
   
	   { throw  $e; }
   }

	public function readReservations(){
		$sql = 'SELECT * FROM reservations';
		$results = $this->DataHandler->readsData($sql); 
		return 	$this->OutputData->createTable($results);

	}

	public function readContact($id){

	}

	public function updateContact($name, $phone, $email, $address, $id){

	}

	public function deleteReservation($res_date, $table_amount){
		try { 
			$sql = "DELETE FROM reservations WHERE res_date='$res_date'";
			$results = $this->DataHandler->createData($sql); 
		   }catch (Exception $e)
   
	   { throw  $e; }
	}



}


// 				$html .= '<td><button onClick="loadPage(\'index.php?controller=reservations  
				
// &" ' . $result['res_date'] . ' "
// &" ' . $result['table_number'] . ' "&todo=deleteReservation\', sendToContent);">verwijderen</button></td>';