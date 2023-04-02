<?php
//checks different parameters after pressing the Login button through the functions.inc.php file and returns result to login.php file. 

if(isset($_POST["submit"])){
//Post method used to retrieve specific data points. 
	$email = $_POST["name"];
	$pwd = $_POST["pwd"];
	require_once 'connection.php';
	require_once 'functions.inc.php';
	//Some fields are not filled	
	if(emptyInputLogin($email,$pwd) !== false){
		header("location: login.php?error=emptyinput");
		exit();
	}
	//Logs the user into their account. 
	loginUser($con,$email, $pwd);
}
else{
	header("location:login.php");
	exit();	
}