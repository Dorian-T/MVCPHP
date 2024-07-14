<?php

session_start();

// controllers :
require_once 'controller/HomeController.php';
// require_once 'controller/...';

// models :
// require_once 'model/...';


if(isset($_GET['action'])) {
	switch($_GET['action']) {
		// case '...':
		// 	$... = new ...Controller();
		// 	$...->render();
		// 	break;

		default:
			header('Location: ./');
			break;
	}
}
else {
	$controller = new HomeController();
	$controller->render();
}
