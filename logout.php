<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pass']);
session_destroy(); // destroy session
header("location:regndlog.php");
