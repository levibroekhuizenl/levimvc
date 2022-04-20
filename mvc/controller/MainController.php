<?php

require_once "controller/ReservationController.php";

class MainController {
    public $reservationController;

    public function __construct() {
        $this->reservationController = new ReservationController();
    }

    public function handleRequest() {
        $controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : "";
        $todo = isset($_REQUEST['todo']) ? $_REQUEST['todo'] : "";

        switch ($controller) {
            case 'createform':
                if(isset($_REQUEST) ) {
                    $this->reservationController->handleRequest($todo, $_REQUEST); 
                }else {
                    $this->reservationController->handleRequest($todo);
                }
                break;
            default:
                $this->reservationController->handleRequest();
                break;
        }
    }

    public function __destruct() {
        $this->controller = null;
        $this->op = null;
    }
}

?>