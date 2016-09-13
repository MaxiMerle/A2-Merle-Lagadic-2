<?php
require('config/config.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && 
	!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	userRegistration($db , $_POST['name'],$_POST['email'],$_POST['password']);
	header('Location: login.php');


}else{ 
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}