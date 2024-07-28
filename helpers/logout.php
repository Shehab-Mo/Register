<?php
session_start();
require_once '../helpers/functions.php';

$_SESSION['is_logged_in'] = false;

redirect('index.php');
