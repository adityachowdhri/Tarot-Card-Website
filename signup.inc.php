<?php
//checks different parameters after pressing the Sign Up button which are sent back to sign up page

if(isset($_POST["submit"])){
	//Post method used to retrieve specific data points. 
	$email = $_POST["email"];
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];
	require_once 'connection.php';
	require_once 'functions.inc.php';
	//Some fields not filled
	if(emptyInputSignup($pwd,$email,$pwdRepeat,$username) !== false){
		header("location: signup.php?error=emptyinput");
		exit();
	}
	//Password and confirm password dont match	
	if(pwdMatch($pwd,$pwdRepeat)!== false){	
	header("location: signup.php?error=passwordsdontmatch");
	exit();
	}
	//Account with email ID exists. 
	if(emailExists($con,$email)!== false){	
	header("location: signup.php?error=emailtaken");
	exit();
	}
	//Refers to a function in the functions.inc.php file
	createUser($con,$email,$pwd,$username);

	
}
else{
	header("location: signup.php");
	exit();
}
?>