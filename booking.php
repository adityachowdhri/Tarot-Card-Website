<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Book a slot</title>
</head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body style="background-color:  #FBEEC1">
    <script type="text/javascript">
    <?php
$php_array = array();
include('connection.php');
$s=mysqli_query($con,"select * from payment");
while($r = mysqli_fetch_array($s)){
  //Selects all the booked dates from the data table
	$date = $r['date'];
	array_push($php_array,$date);
	?>

    <?php
}
?>
    var dates = [<?php echo '"'.implode('","', $php_array).'"' ?>];
    for (var i = 0; i < dates.length; i++) {
      //Changes the format for all the booked dates to ensure that jQuery datepicker recognizes it
        dates[i] = dates[i].replace('-', '/');
        dates[i] = dates[i].replace('-', '/');
    }


    //A jQuery function that disables all the dates
    function DisableDates(date) {
        var string = jQuery.datepicker.formatDate('yy/mm/dd', date);
        return [dates.indexOf(string) == -1];
    }
    $(function() {
        $("#date").datepicker({
            beforeShowDay: DisableDates,
            dateFormat: 'yy/mm/dd',
            minDate: "0",
            maxDate: "+3M +15D",
            changeMonth: true,
            changeYear: true
        });
    });
    </script>
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
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#28363D ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <center>
            <h1 style="color: antiquewhite;font-size: 80px;margin-bottom: 25px">Book A Slot</h1>
        </center>
        </div>
    </nav>
    <center>
        <div style="margin-top: 50px;margin-bottom: 150px">
            <form autocomplete="off">
                <center>
                    <p style="text-align: center;font-size: 20px">Please Select A Date&nbsp; &nbsp;&nbsp; </p>
                    <input id="date" name="date">
                    <br>
                    <br>
                    <input class="button button1" type="button" name="btn" id="btn" value="Pay" onclick="pay_now()" />
                </center>
            </form>
        </div>
        <div class="col-md-4"></div>
        </div>
    </center>
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
    <script>
     //The razorpay payment code 
    function pay_now() {
        var name = <?php echo json_encode($_SESSION["name"]); ?>; 
        //The amount that needs to be paid on Razorpay is from the services page, stored in a session variable
        var amt =
        <?php echo json_encode($_SESSION["price"]); ?>;
        var date = jQuery('#date').val(); //date to be inserted upon payment button being clicked.
        jQuery.ajax({
            type: 'post',
            url: 'payment_process.php',
            data: "amt=" + amt + "&name=" + name + "&date=" + date,
            success: function(result) {
                var options = {
                    "key": "rzp_test_tCZ6dUL8ozHWEO",
                    "amount": amt * 100,
                    "currency": "INR",
                    "name": "Kay's Tarot",
                    "description": "Confirm Booking",
                    "handler": function(response) {
                        jQuery.ajax({
                            type: 'post',
                            url: 'payment_process.php',
                            data: "payment_id=" + response.razorpay_payment_id,
                            success: function(result) {
                                window.location.href = "thank_you.php";
                            }
                        });
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        });


    }
    </script>
</body>