<?php
session_start();
session_destroy('sessionID');
unset($_SESSION["login_user"]);
//header('location : ./styles/test.php');
header("Location:./index.php");
