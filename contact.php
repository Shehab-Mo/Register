<?php
session_start();
require_once 'helpers/functions.php';
require_once 'inc/header.php';
require_once 'inc/nav.php';
?>

<h2>
    <?= isset($_SESSION['error']) ? $_SESSION['error'] : ''; ?>
</h2>
<h2>
    <?= isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true ? 'log in' : ''; ?>
</h2>

<form action="actions/contact.php" method="GET" class="border p-2 mt-4 m-auto w-75 ">
    <div class="mb-3">
        <label for="">Username:</label>
        <input type="text" name="username" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email:</label>
        <input type="email" name="email" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Password:</label>
        <input type="password" name="password" id="" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Confirm Password:</label>
        <input type="password" name="confirmPassword" id="" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-info w-100 text-white">
            Submit
        </button>
    </div>
</form>


<?php require_once 'inc/footer.php'; ?>