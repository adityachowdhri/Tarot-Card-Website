<?php
//Checks if user has left fields empty on signup page
function emptyInputSignup($pwd,$email,$pwdRepeat,$username){
	$result;
	if(empty($email) || empty($pwd) || empty($pwdRepeat)|| empty($username)){
		$result=true;
	}
	else{
		$result=false;
	}
	return $result;
}
//Checks if passwords match on signup page
function pwdMatch($pwd,$pwdRepeat){
	$result;
	if($pwd !== $pwdRepeat){
		$result=true;
	}
	else{
		$result=false;
	}
	return $result;
}
//Checks if account with email ID exists on signup page
function emailExists($con,$email){
	$sql = "SELECT * FROM users WHERE usersEmail = ?;";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: signup.php?error=emailExists");
		exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row=  mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

//Creats User on signup page
function createUser($con,$email,$pwd,$username){ 
	$sql = "INSERT INTO users (usersEmail,usersPwd,usersName) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: signup.php?error=stmtfailed");
		exit();
	}
	//Hashes the password 
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt,"sss",$email,$hashedPwd,$username);
	mysqli_stmt_execute($stmt);
	header("location: login.php?error=none");
	exit();
}
//Checks if user has left fields empty on login page
function emptyInputLogin($email,$pwd){
	$result;
	if(empty($email) || empty($pwd)){
		$result=true;
	}
	else{
		$result=false;
	}
	return $result;
}
//Logs user in on login page
function loginUser($con,$email, $pwd){
	$emailExists = emailExists($con,$email);
	
	if($emailExists === false){
		header("location: login.php?error=noaccount");
		exit();
	}
	//Hashes the password
	$pwdHashed = $emailExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);
	if($checkPwd === false){
		header("location: login.php?error=wronglogin");
		exit();
	}
	else if ($checkPwd === true){
		session_start();
		$_SESSION["userid"] = $emailExists["usersId"];
		$_SESSION["userEmail"] = $emailExists["usersEmail"];
		$_SESSION["name"] = $emailExists["usersName"];
		header("location: index.php");
		exit();
	}
}
function loginerror(){

}
