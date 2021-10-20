<?php
include_once("constant.php");

unset($_SESSION['access_token']);
unset($_SESSION['number']);
unset($_SESSION['email']);
unset($_SESSION['user_role']);
unset($_SESSION['phone_verified']);
unset($_SESSION['email_verify']);
unset($_SESSION['profile_approved']);

header("Location: ../signout-confirmation.php");

?>