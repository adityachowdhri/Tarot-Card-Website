<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="color: white;background-color: #28363D ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> </li>
                <li class="nav-item"> </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu&nbsp; </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item"
                            href="services.php">Services</a> <a class="dropdown-item" href="testimonials.php">
                            Testimonials</a><a class="dropdown-item" href="tandc.php">Terms and conditions</a>
                    </div>
                </li>
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

  
    <div class="jumbotron" style="background-color: #28363D">

        <h1 class="display-4 offset-xl-0 col-xl-12" style="font-size:75px;">
            <strong style="color: antiquewhite">Kay's Tarot</strong>
        </h1>
    </div>

    <div class="container-fluid" style="background-color: #FBEEC1">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">


                <img src="Website/Images/New Home Page Image.png" width="450" />
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <center><a href="services.php" class="btn btn-primary"
                                style="background-color: transparent;color: black;border: none; border-color: transparent">
                                <div class="card" style="background-color: transparent">
                                    <div class="card-body" style="background-color: transparent">
                                        <img src="Website/Images/84770f_a59172112a5d413ba0e34d0e9c1132fd.png"
                                            width="150px" />

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
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <br>
                        <center>
                            <h3 class="text-left" style="font-size: 40px">
                                About Me
                            </h3>
                        </center>
                        <p style="color: black">
                            My name is Kavita. I am an entrepreneur running a succesful business. But reading tarot,
                            giving solutions and guidance to people in all aspects of their lives resonates with my core
                            belief of helping people. Based out of Bengaluru I have served many clients all over the
                            globe. I have a rich experience of 3 years. I’d love to show you how to harness the power of
                            Tarot to lead a calmer, stronger and more satisfying life. Whether you are seeking guidance
                            in your personal life or professional life, I have got an offering for everyone! You can
                            book a tarot reading via a phone call, sms, WhatsApp, Facebook or Instagram.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <br>
                        <center>
                            <h3 class="text-left" style="font-size: 40px">
                                What is Tarot ?
                            </h3>
                        </center>
                        <p style="color: black">
                            Tarot is a tool for confident decision-making, clear communication and timely, decisive
                            action. With each Tarot reading, we can explore the pros + cons of different choices that
                            you might make creating the best possible plan for the future you want. Ultimately, it’s all
                            about clarity shining a light through the mental fog so that you can make excellent choices
                            for your relationships, your family, your finances, your business and your quality of life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #D13C3C;border: thin">
            <div class="col-md-12">
                <h4 style="font-size: 25px;text-shadow: none;color: black">Contacts </h4>
                <center><a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <p style="font-size: 12px; color: black">Phone Number: +91 998***219**&nbsp;</p>
                </center>
            </div>
        </div>
    </div>
    <script src="IA/js/jquery-3.4.1.min.js"></script>
    <script src="IA/js/popper.min.js"></script>
    <script src="IA/js/bootstrap-4.4.1.js"></script>
</body>

</html>