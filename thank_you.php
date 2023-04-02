<?php
session_start();
?>
<head>
<title>Thank You</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

footer {
    margin-top: auto;
}

.fa {
    padding-top: 10px;
    font-size: 30px;
    width: 50px;
    height: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 5px;
    border-radius: 50%;
}


}

.fa-google {

    color: white;
}

.fa-instagram {

    color: white;
}

.fa-facebook {
    color: white;
}
</style>

<body style="background-color: #FBEEC1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <a href="index.php"><button class="button button1"
                            style="background-color: #28363D; height: 40px; width: 40px;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg></button></a>
                </div>


                <center>
                    <h1 style="color: white;margin-left: 190px;min-width: 400px;font-size: 75px">Kay's Tarot</h1>
                </center>
            </ul>
        </div>
        <?php
	if (isset($_SESSION["userEmail"])){
		echo "<a href='logout.inc.php' style='margin-right:20px;color:white'>Logout</a>";
	
	}
	else{
		echo "<a href='login.php' style='margin-right:20px;color:white'>Log In</a>";
		echo "<a href='signup.php' style='margin-right:20px;color:white'>Sign Up</a>";
	}
?>
    </nav>



    <!--
<a href="login.php" style="margin-right: 20px;color: white">Login</a>
<a href="login.php" style="margin-right: 20px;color: white">Sign Up</a>
-->




    <!-- body code goes here -->

    <center>
        <br>
        <br>
        <p>Your payment has been completed, please wait a few minutes you will recieve further details on:
            <?php print_r($_SESSION["userEmail"])	?>. You can always contact us if there are any issues</p>
    </center>
    <div class="row">
        <div class="col-md-4">
            <center><a href="services.php" class="btn btn-primary"
                    style="background-color: transparent;color: black;border: none; border-color: transparent">
                    <div class="card" style="background-color: transparent">
                        <div class="card-body" style="background-color: transparent">
                            <img src="Website/Images/84770f_a59172112a5d413ba0e34d0e9c1132fd.png" width="150px" />

                            <h2 style="font-size: 30px" class="text-center">Services</h2>

                        </div>
                    </div>
                </a></center>
        </div>
        <div class="col-md-4">
              <center><a href="testimonials.php" class="btn btn-primary"
              style="background-color: transparent;color: black;border: none; border-color: transparent">
              <div class="card" style="background-color: transparent">
              <div class="card-body" style="background-color: transparent">
              <img src="Website/Images/Index page 2.png" width="150px" />

              <h2 style="font-size: 30px" class="text-center">Testimonials</h2>

              </div>
              </div>
              </a></center>
        </div>
        <div class="col-md-4">
                  <center><a href="tandc.php" class="btn btn-primary"
                  style="background-color: transparent;color: black;border: none; border-color: transparent">
                  <div class="card" style="background-color: transparent">
                  <div class="card-body" style="background-color: transparent">
                  <img src="Website/Images/Index photo 3.png" width="150px" />
                  <h2 style="font-size: 30px" class="text-center">Terms and Conditions</h2>

                  </div>

                  </div>
                  </a></center>
        </div>
    </div>
    <!--Over here -->

    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

include('connection.php');
$to = $_SESSION["userEmail"];
$price = $_SESSION["price"];
$booked = $_SESSION["booking"];


$booking=mysqli_query($con,"select * from booking order by id desc limit 1");
while($ser = mysqli_fetch_array($booking)){
	$service = $ser['service'];
}
$s=mysqli_query($con,"select * from payment order by id desc limit 1");
while($r = mysqli_fetch_array($s)){
	$amount = $r['amount'];
	$name = $r['name'];
	$date = $r['date'];
	$payment = $r['payment_id'];
}

try {
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();//Send using SMTP
    $mail->Username   = '***@gmail.com';
    $mail->Password   = '***';
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;//Enable SMTP authentication
    $mail->Port       = 587;
    $mail->SMTPSecure = "tls";//Enable implicit TLS encryption

    //Recipients
    $mail->setFrom('kavitastarot@gmail.com', 'Kays Tarot');
    $mail->addAddress($to);// Change to variable from currentuser

    //Content
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = 'Booking Confirmed';
    $mail->Body = '<p>Dear ' . $name .',</p><br><p>Payment for your booking has been received. Please ensure all the information below is correct. <br>Date: ' . $date . ' <br>Payment Amount: ' . $price . '<br><br>A follow up email will be sent in two hours. However, if you wish to contact me please do so at either of the following:<br>Phone number: 99********<br>Email ID: kavitastarot@gmail.com <br>Instagram: kaystarot<br></p><br><br><p>Warm regards, Kays Tarot</p>';
    $mail->send();
    error_log("Message has been sent");
} catch (Exception $e) {
    error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}
	
?>
    <p style="font-family: times new Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">
    </p>
    <?php
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';


try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();//Send using SMTP

    //Server settings
    // $mail->SMTPDebug = 2; //Alternative to above constant
    $mail->SMTPAuth   = true;//Enable SMTP authentication
    $mail->Username   = '***@gmail.com';
    $mail->Password   = '***';
    $mail->Host       = 'smtp.gmail.com';
    $mail->Port       = 587;
    $mail->SMTPSecure = "tls";//Enable implicit TLS encryption

    //Recipients
    $mail->setFrom('kavitastarot@gmail.com', 'Kays Tarot');
    $mail->addAddress('kavitastarot@gmail.com');
    
    //Content
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = 'New Booking';
    $mail->Body = 'Dear Kavita, <br><br>A customer has confirmed a booking <br>Date: ' . $date. ' <br>Amount: ' . $price. '<br> Service: ' . $booked. '<br> Email ID: ' . $to. '<br>Warm Regards, <br><br>Kays Tarot';//Change details to those from database 

    $mail->send();
    error_log("Message has been sent");
} catch (Exception $e) {
    error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}
	
?>


    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-4.4.1.js" type="text/javascript"></script>
</body>
<footer>
    <div class="row" style="background-color: #D13C3C;border: thin">
        <div class="col-md-12">
            <h4 style="font-size: 25px;text-shadow: none;color: black">Contacts </h4>
            <center><a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-facebook"></a>
                <p style="font-size: 12px">Phone Number: +91 998***219**&nbsp;</p>
            </center>
        </div>
    </div>
</footer>