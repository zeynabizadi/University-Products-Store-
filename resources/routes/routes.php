<?php

session_start();

include('../config/config.php');

$errors = array();

function logout($path) {
    session_destroy();
    header('location:', $path);
}

if (isset($_GET['logout'])) logout($path);

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if (empty($name)) array_push($errors, 'نام الزامیست');
    if (empty($lastname)) array_push($errors, 'نام خانوادگی الزامیست');
    if (empty($phone)) array_push($errors, 'شماره همراه الزامیست');
    if (empty($email)) array_push($errors, 'ایمیل الزامیست');
    if (empty($password)) array_push($errors, 'رمز الزامیست');

    if (count($errors) == 0) {
        $id = rand(11111, 99999);
        if (mysqli_query($connection, "INSERT INTO users (`id`, `name`, `lastname`, `phone`, `email`, `password`) VALUES ('$id', '$name', '$lastname', '$phone', '$email', '$password')")) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            header('location:' . $path . '/user');
        } else array_push($errors, mysqli_error($connection));
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if (empty($email)) array_push($errors, 'ایمیل الزامیست');
    if (empty($password)) array_push($errors, 'رمز الزامیست');

    if (count($errors) == 0) {
        if (mysqli_num_rows($user_query = mysqli_query($connection, "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'")) == 1) {
            $user = mysqli_fetch_assoc($user_query);
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $user['id'];
            header('location:' . $path . '/user');
        } else array_push($errors, 'اطلاعات وارد شده معتبر نمیباشد');
    }
}

if (isset($_POST['newbook'])) {
    // New book
}