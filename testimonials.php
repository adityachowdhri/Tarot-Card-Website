<?php
session_start();
include_once('connection.php');
//stores all the fields from data table review
$query="select * from review";
$reviewresult=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
    <!--Star rating system-->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <!--Circular button-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
    </style>
    <script src="js/addons/rating.js"></script>

</head>
<script>
function showtestimonial() {
    document.getElementById('table').style.visibility = "visible";
    document.getElementById('table2').style.visibility = "visible";
    document.getElementById('table').style.display = "block";
    document.getElementById('table2').style.display = "block";
    document.getElementById('hide').style.visibility = "visible";
    document.getElementById('hide').style.display = "block";
    document.getElementById('show').style.visibility = "hidden";
    document.getElementById('show').style.display = "none";

}

function hidetestimonial() {
    document.getElementById('table').style.visibility = "hidden";
    document.getElementById('table2').style.visibility = "hidden";
    document.getElementById('table').style.display = "none";
    document.getElementById('table2').style.display = "none";
    document.getElementById('show').style.visibility = "visible";
    document.getElementById('show').style.display = "block";
    document.getElementById('hide').style.visibility = "hidden";
    document.getElementById('hide').style.display = "none";

}
</script>

<body style="background-color: #FBEEC1" onload="javascript:hidetestimonial()">

    <!--Creating Dynamic boxes-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark " style="color: white;background-color: #28363D ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
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
    </header>
    <div class="jumbotron" style="background-color: #28363D;margin-top: -1.57%;padding: 1px">

        <h1 class="display-4 offset-xl-0 col-xl-12" style="font-size:75px;">
            <strong style="color: antiquewhite;font-family: Berkshire Swash">Testimonials</strong>
        </h1>
    </div>
    <center>
        <h3 style="font-family: Sacramento;font-weight:bold;font-size: 40px">View previous customers Testimonials</h3>
    </center>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['review']))
    {
//if this condition is met then the user has signed in.
			if(isset($_SESSION["userEmail"])){ 
        //Puts the user inputs in a post variable.
				$rating = $_POST['star'];
				$review = $_POST['subject'];
				$name = $_POST['username'];    
				if($rating == NULL || $review==NULL || $name==NULL){
			   ?>
            <center>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';"
            style="background-color: #F44336">&times;</span>
            <strong>Please fill all the fields!</strong>
            </div>
            </center>
    <?php				
				}
				else{	
				$email = $_SESSION["userEmail"];
				$name = $_POST['username'];
        //Inserts review into data table
				$sql = "INSERT INTO review ( testimonial, rating, name, email) VALUES ('$review','$rating','$name','$email')";
				$result = mysqli_query($con, $sql);
				?>
          <center>
          <div class="alert2">
          <span class="closebtn" onclick="this.parentElement.style.display='none';"
          style="background-color: #5FA335">&times;</span>
          <strong>Testimonial added succesfully!</strong>
          </div>
          </center>
    <?php			
				}
	}
		else{
	?>
        <center>
        <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Please Login!</strong>
        </div>
        </center>
    <?php			
	}
}
?>
        <center>
        <input class="w3-button w3-xlarge w3-circle w3-black" type='button' onClick='javascript:showtestimonial();'
        value='+' id="show">
        <input class="w3-button w3-xlarge w3-circle w3-black" type='button' onClick='javascript:hidetestimonial();'
        value='-' id="hide" style="visibility: hidden;display: none" style="height: 50px;width: 50px">
        </center>
    <div class="container-fluid" style="background-color: transparent">
        <div class="row">
            <!--table 1-->

            <!-- Divides the reviews into two tables, this is the first table -->
            <table align="center" border="0px" style="width:800px; line-height:50px;visibility: hidden;display: none;"
                id="table">
                <?php
        $count = mysqli_num_rows($reviewresult);
        $counter = 0;

     while($rows=mysqli_fetch_assoc($reviewresult))
        {

            $rating = $rows['testimonial'];

            $star = $rows['rating'];

            $name = $rows['name'];

        ?>

                <tr>
                    <td><?php echo $name ?>
                        <br>
                        <?php echo $rating ?>
                        <input id="star-rating-1" name="star" class="rating" value="<?php echo $star; ?>" data-min="0"
                            data-max="5" data-step="1" data-size="xs" readonly>
                    </td>
                </tr>

                <?php
         $counter = $counter+1;
         if($counter >= ($count/2)){
             break;
         }
        }
    ?>


            </table>
            <!-- Divides the reviews into two tables, this is the second table -->
            <table align="center" border="0px" style="width:800px; line-height:50px;visibility: hidden;display: none;"
                id="table2">

                <?php while($rows=mysqli_fetch_assoc($reviewresult) )
        {

            $rating = $rows['testimonial'];
            $star = $rows['rating'];
            $name = $rows['name'];
        ?>
                <tr>
                    <td><?php echo $name ?>
                        <br>
                        <?php echo $rating ?>

                        <input id="star-rating-1" name="star" class="rating" value="<?php echo $star; ?>" data-min="0"
                            data-max="5" data-step="1" data-size="xs" readonly>
                    </td>
                </tr>

                <?php
        }
    ?>

            </table>
        </div>



    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container" style="background-color: transparent">
        <form action="testimonials.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <h3 style="font-family: Sacramento;font-weight:bold;font-size: 40px">Name</h3>
                </div>
                <div class="col-md-9">
                    <textarea type="text" id="name" name="username" rows="1" cols="1"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3 style="font-family: Sacramento;font-weight:bold;font-size: 40px">Rating</h3>
                </div>
                <div class="col-md-9">
                    <input id="star-rating-1" name="star" class="rating" value="5" data-min="0" data-max="5"
                        data-step="1" data-size="xs">
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3 style="font-family: Sacramento;font-weight:bold;font-size: 40px">Testimonial</h3>
                </div>
                <div class="col-md-9">
                    <textarea type="text" id="testimonial" name="subject" rows="8" cols="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">

                    <a href="testimonials.php"><button class="button button1"
                            style="color: white;vertical-align:middle;background-color: forestgreen" id="submit"
                            name="review"><span>Submit</span></button></a>
        </form>
    </div>
    </form>
    </div>
    <br>







</body>
<footer style="background-color:#D13C3C ">
    <div class="container-fluid" style="width: 1000px;background-color: #D13C3C;border: thin">


        <h4 style="font-size: 25px;text-shadow: none;color: black">Contacts </h4>
        <center><a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-facebook"></a>
            <p style="font-size: 12px">Phone Number: +91 998***219**&nbsp;</p>
        </center>

    </div>
</footer>

</html>