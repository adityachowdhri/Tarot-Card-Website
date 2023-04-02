<?php
//End the session when user logs out
session_start();
session_unset();
session_destroy();

header("location: index.php");
exit();