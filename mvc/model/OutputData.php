<?php

class OutputData {

	public function __construct() {
		
	}

	public function createTable($results){
		$html = '<table>';


        foreach($results as $result){
			foreach ($result as $head => $hvalue){
				$html .= '<th>' . $head . '</th>';
			}

			foreach($results as $result){
				$html .= '<tr>';
				foreach ($result as $columns => $value){
					$html .= '<td>' . $value . '</td>';
				}
				$html .= '<td><button onClick="loadPage(\'index.php?controller=reservations&date="$result["res_date"]"&table="$result["res_date"]"&todo=createForm\', sendToContent);" >updaten</button></td>';
				$html .= '<td><button onClick="loadPage(\'index.php?controller=reservations&todo=deleteReservation&date=' . $result['res_date'] . '&table=' . $result['table_number'] . '\', sendToContent);">verwijderen</button></td>';
				$html .= '</tr>';
			}			
		}
		
		$html .= '</table>';
		return $html;
	}
}