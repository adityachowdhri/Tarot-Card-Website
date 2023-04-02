<!DOCTYPE html>
<html>

<head>

    </script>
    <title>Sign up</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.4.1.css">

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
    </nav>
    <h1 style="font-size: 75px;color: antiquewhite;background-color: #28363D ">Kay's Tarot</h1>
    <div id="frm">
        <h1 style="font-size: 40px;min-width: 200px">Sign Up</h1>
        <center>
            <form name="f1" action="signup.inc.php" method="POST">


                <input type="email" name="email" placeholder="Email" />
                <br>
                <br>
                <input type="text" name="username" placeholder="Please enter a username" />
                <br>
                <br>
                <input type="password" name="pwd" placeholder="Password" />
                <br>
                <br>
                <input type="password" name="pwdrepeat" placeholder="Confirm Password" />
                <br>
                <br>
                <button type="submit" name="submit" class="button button1" style="background-color: #BC8D02">Sign
                    Up</button>
            </form>
        </center>
        <p class="w-100 text-center"><a href="login.php">Or Login&nbsp;</a></p>
    </div>

<!-- PHP -->
<?php
//Warning messages from the functions in signup.inc.php
if(isset($_GET["error"])){
  if($_GET["error"]=="emptyinput"){
    ?>

    <center>
    <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Please enter all the fields!</strong>
    </div>
    </center>


    <?php			
  }
  else if($_GET["error"]=="passwordsdontmatch"){
    ?>

    <center>
    <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Passwords Dont Match</strong>
    </div>
    </center>


    <?php			
  }
  else if($_GET["error"]=="emailtaken"){
    ?>

    <center>
    <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Account with email Id already exists!</strong>
    </div>
    </center>


    <?php			
  }
  else if($_GET["error"]=="stmtfailed"){
    ?>

    <center>
    <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Unknown Error. Please try again</strong>
    </div>
    </center>


    <?php			
  }
}
?>

</body>

</html>