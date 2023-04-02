<?php
	session_start();

	include('connection.php');

	if(isset($_POST['amt']) && isset($_POST['date'])){
	    $amt=$_SESSION["price"];
	    $name=$_SESSION["name"];
	    $date=$_POST["date"];   
	    $added_on=date("Y-m-d h:i:s");
	    $payment_status="pending";
	    $email=$_SESSION["userEmail"];
	    error_log($amt);
	    error_log($name);
	    error_log($date);
	    error_log($added_on);
	    error_log($email);
	    $result=mysqli_query($con,"insert into payment(name,amount,payment_status,added_on,date,email) values('$name','$amt','$payment_status','$added_on','$date','$email')");
	    $_SESSION["OID"]=mysqli_insert_id($con);
	    echo json_encode($result);
	}


	if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
	    $payment_id=$_POST['payment_id'];
	    $result=mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
	    echo json_encode($result);
	}
?>
