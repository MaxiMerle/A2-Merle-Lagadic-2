<?php session_start();

require('config/config.php');
require('model/functions.fn.php');

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){
		
		$userc = userConnection($db, $_POST['email'], $_POST['password']);

		if ($userc){
			header('Location: dashboard.php');
		}
		else{
			$error = "Identifiants Incorrects !";
		}
		
	}else{
		$error = 'Champs requis !';
	}
}
/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';
