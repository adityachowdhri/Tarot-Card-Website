<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.alert2 {
    padding: 20px;
    background-color: #5FA335;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
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


    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#28363D ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="index.php"><button class="button button1"
                    style="background-color: #28363D; height: 40px; width: 40px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                    </svg></button></a>
        </div>
        <?php
  //Checks if the user is logged in or not and displays the appropriate buttons
	if (isset($_SESSION["userEmail"])){
		echo "<a href='logout.inc.php' style='margin-right:20px;color:white'>Logout</a>";
	}
	else{
		echo "<a href='login.php' style='margin-right:20px;color:white'>Log In</a>";
		echo "<a href='signup.php' style='margin-right:20px;color:white'>Sign Up</a>";
	}
?>

    </nav>
    <div class="jumbotron" style="background-color: #28363D">

        <h1 class="display-4 offset-xl-0 col-xl-12" style="font-size:75px;">
            <strong style="color: antiquewhite">Services</strong>
        </h1>
    </div>

    <!--Yes or no questions button-->
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['yesno']))
    {
    include('connection.php');
//if this condition is met then the user has signed in.
	if (isset($_SESSION["userEmail"])){
			$_SESSION["price"] = 500;
      $_SESSION["booking"] = "Yes or No Services";
			?>

    <script>
    location.href = 'final.php';


    function yesno() {
        <?php
		$sql = "INSERT INTO booking (price,service) VALUES (500,'Yes or No Services')";
		$result = mysqli_query($con, $sql);
		?>
    }
    </script>
    <?php

}
else{

	?>

      <center>
      <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Please sign in or login first</strong>
      </div>
      </center>


    <?php
}
    }
?>
    <!--Email Question button on click-->
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['email']))
    {
    include('connection.php');
//if this condition is met then the user has signed in.
	if (isset($_SESSION["userEmail"])){
		$_SESSION["price"] = 1000;
    $_SESSION["booking"] = "Email Services";
			?>

    <script>
    location.href = 'final.php';


    function email() {
        <?php
		$sql = "INSERT INTO booking (price,service) VALUES (1000,'Email Services')";
		$result = mysqli_query($con, $sql);
		?>
    }
    </script>
    <?php

}
else{

	?>

      <center>
      <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Please sign in or login first</strong>
      </div>
      </center>


    <?php
}
    }
?>
    <!--Phone button clicked-->
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['phone']))
    {
    include('connection.php');
//if this condition is met then the user has signed in.
	if (isset($_SESSION["userEmail"])){
				$_SESSION["price"] = 600;
        $_SESSION["booking"] = "Phone Services";
			?>

    <script>
    location.href = 'final.php';


    function email() {
        <?php
		$sql = "INSERT INTO booking (price,service) VALUES (600,'Phone Services')";
		$result = mysqli_query($con, $sql);
		?>
    }
    </script>
    <?php

}
else{

	?>

      <center>
      <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Please sign in or login first</strong>
      </div>
      </center>


    <?php
  
}
    }
?>
    <!--Video Question button on click-->
    <?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['video']))
    {
    include('connection.php');
//if this condition is met then the user has signed in.
	if (isset($_SESSION["userEmail"])){
		$_SESSION["price"] = 700;
    $_SESSION["booking"] = "Video Services";

			?>

    <script>
    location.href = 'final.php';


    function email() {
        <?php
		$sql = "INSERT INTO booking (price,service) VALUES (700,'Video Services')";
		$result = mysqli_query($con, $sql);
		?>
    }
    </script>
    <?php

}
else{

	?>

      <center>
      <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Please sign in or login first</strong>
      </div>
      </center>


    <?php


}
    }
?>


    <div class="container"> <br>
        <br>
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="100000000000"
            style="background-color: transparent">
            <ol class="carousel-indicators" style="margin-bottom: 40px">
                <li data-target="#carousel" data-slide-to="0" style="background-color: black"></li>
                <li data-target="#carousel" data-slide-to="1" style="background-color: black"></li>
                <li data-target="#carousel" data-slide-to="2" style="background-color: black"></li>
                <li data-target="#carousel" data-slide-to="3" style="background-color: black"></li>

            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" data-interval="100000000000"> <img class="d-block mx-auto"
                        src="Website/Images/1600x900-white-solid-color-background.jpg" alt="First slide">
                    <br>
                    <div class="carousel-caption" style="margin-bottom: 180px">
                        <h1 style="color: black;font-size: 20px">Yes or No Questions </h1>
                        <h3 style="color: black">Description</h3>
                        <p style="color: black">You can ask a Yes/No question and Tarot Cards will be used to obtain the
                            answer.</p>
                        <h3 style="color: black">Price</h3>
                        <p style="color: black">&#x20b9 500 for 5 question</p>
                        <form action="services.php" method="post" style="margin-top: 190px;margin-bottom: -190px">
                            <button onclick="yesno()" class="button button1"
                                style="color: white;background-color: green" id="bookyesno"
                                name="yesno"><span>Book</span></button>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>

                <div class="carousel-item" data-interval="10000000"> <img class="d-block mx-auto"
                        src="Website/Images/1600x900-white-solid-color-background.jpg" alt="Second slide">
                    <br>
                    <div class="carousel-caption" style="margin-bottom: 50px">
                        <h1 style="color: black;font-size: 20px">Email Tarot Reading</h1>
                        <h3 style="color: black">Description</h3>
                        <p style="color: black">Family, relationship, career, health and finances are the areas where we
                            sometimes feel stuck and need guidance. If you are looking for a ray of light and sense of
                            __ feel free to discuss it with me. Write a line or two about your situation and send me the
                            email.</p>
                        <h3 style="color: black">Price</h3>
                        <p style="color: black"> 5 Question: &#x20b9 1000 </p>
                        <p style="font-size: 10px; color: black"><strong>Note:</strong>&nbsp;Reading via email is shared
                            in 72 hours, after the confirmation of payment and question being recieved</p>

                        <form action="services.php" method="post" style="margin-top: 100px;margin-bottom: -65px">
                            <button onclick="email()" class="button button1"
                                style="color: white;background-color: green" id="bookemail"
                                name="email"><span>Book</span></button>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000000"> <img class="d-block mx-auto"
                        src="Website/Images/1600x900-white-solid-color-background.jpg" alt="Second slide">
                    <br>
                    <div class="carousel-caption" style="margin-bottom: 50px">
                        <h1 style="color: black;font-size: 20px">Phone Tarot Reading</h1>
                        <h3 style="color: black">Description</h3>
                        <p style="color: black">Phone tarot reading helps the reader to be able to answer ones questions
                            spontaneously and can provide instant guidance</p>
                        <h3 style="color: black">Price</h3>
                        <p style="color: black"> 3 questions:&#x20b9 600 </p>


                        <form action="services.php" method="post" style="margin-top: 100px;margin-bottom: -65px">
                            <button onclick="phone()" class="button button1"
                                style="color: white;background-color: green" id="bookphone"
                                name="phone"><span>Book</span></button>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000000"> <img class="d-block mx-auto"
                        src="Website/Images/1600x900-white-solid-color-background.jpg" alt="Second slide">
                    <br>
                    <div class="carousel-caption" style="margin-bottom: 50px">
                        <h1 style="color: black;font-size: 20px">Face to Face reading</h1>
                        <h3 style="color: black">Description</h3>
                        <p style="color: black">With a personal session you get to experience a tarot reading at its
                            fullest. A personal session helps to draw __ to give you a more enriching experience and
                            fulfilling reading session.</p>
                        <h3 style="color: black">Price</h3>
                        <p style="color: black"> 30 minutes:&#x20b9 700 </p>


                        <form action="services.php" method="post" style="margin-top: 100px;margin-bottom: -65px">
                            <button onclick="video()" class="button button1"
                                style="color: white;background-color: green" id="bookvideo"
                                name="video"><span>Book</span></button>
                        </form>
                        <br>
                        <br>
                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
            </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span
                    class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>

        <hr>

    </div>


    <script src="IA/js/jquery-3.4.1.min.js"></script>
    <script src="IA/js/popper.min.js"></script>
    <script src="IA/js/bootstrap-4.4.1.js"></script>

    <div class="row" style="background-color: #D13C3C;border: thin">
        <div class="col-md-12">
            <h4 style="font-size: 25px;text-shadow: none;color: black">Contacts </h4>
            <center><a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-facebook"></a>
                <p style="font-size: 12px;color: black">Phone Number: +91 998***219**&nbsp;</p>
            </center>
        </div>
    </div>




</body>

</html>