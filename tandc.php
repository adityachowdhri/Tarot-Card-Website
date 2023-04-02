<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Terms and Conditions</title>
    <style type="text/css">
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

    .centerImage {
        text-align: center;
        display: block;
    }
    </style>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #28363D ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
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
            <strong style="color: antiquewhite">Terms and Conditions</strong>
        </h1>
    </div>

    <div class="container-fluid" style="background-color: #FBEEC1">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h3>Payment</h3>
                <p>The payment is required prior to your appointment. No refunds are made if
                    the appointment is cancelled at last minute. Should you wish to cancel or reschedule the
                    appointment, kindly inform us 4 hours in advance. We would be happy to fix the other
                    suitable time.</p>
                <h3>Confidentiality</h3>
                <p>Your personal information will not be disclosed to anybody at any given point of time.</p>
                <h3>Non-Judgemental</h3>
                <p>Your issues and questions will not be judged by us. We will continue to uphold the same to ensure you
                    are comfortable in sharing your concern with us.</p>
                <h3>Refusal</h3>
                <p>We are allowed to refuse your queries if we feel the intent of your question is to gauge our accuracy
                    level or humiliate or troll me.</p>
                <h3>Reading for children and teenagers</h3>
                <p>Although it is tempting to know the future or get the reading done for your children below 18 years
                    of age. But, we don’t provide the guidance for kids & teenagers. For the simple reason of maturity
                    and the willingness to receive an external perspective.</p>

                <br>
                <br>
            </div>
        </div>
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
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../../../../Downloads/js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../../../../Downloads/js/popper.min.js"></script>
    <script src="../../../../../../Downloads/js/bootstrap-4.4.1.js"></script>

</body>

</html>