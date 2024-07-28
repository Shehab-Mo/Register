<?php
session_start();
require_once '../helpers/functions.php';

$user_name = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$confirm_password = $_GET['confirmPassword'];

if (
    (isset($user_name) && $user_name != '') &&
    (isset($email) && $email != '') &&
    (isset($password) && $password != '') &&
    (isset($confirm_password) && $confirm_password != '')

) {
    if ($password === $confirm_password) {
        $_SESSION['error'] = "";
        $_SESSION['is_logged'] = true;
    } else {
        $_SESSION['error'] = "Passwords do not match";
    }
} else {
    $_SESSION['error'] = "All fields are required";
}

redirectAfterTime('../contact.php', 1);
