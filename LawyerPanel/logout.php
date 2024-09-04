<?php

session_start();
session_destroy();
header('location:../RegisterLogin/login.php');

?>