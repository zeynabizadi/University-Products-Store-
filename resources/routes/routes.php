<?php

session_start();

include('../config/config.php');

$errors = array();

if (isset($_GET['logout'])) {
    session_destroy();
    header('location:', $path);
}

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

if (isset($_POST['newbook']) && $_POST['newbook'] == 'upload') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // get details of the uploaded file
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // sanitize file-name
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        // directory in which the uploaded file will be moved
        $uploadFileDir = './uploads/books/';
        $dest_path = $uploadFileDir . $newFileName;

        if(move_uploaded_file($fileTmpPath, $dest_path))  {
            array_push($errors, $message ='File is successfully uploaded.');
        } else {
            array_push($errors, 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.');
        }
    } else {
        array_push($errors, 'مشکلی در آپلود به موجود آمده است.');
        array_push($errors, $_FILES['uploadedFile']['error']);
    }
}