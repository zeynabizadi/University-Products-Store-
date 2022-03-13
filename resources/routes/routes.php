<?php

session_start();

include('../config/config.php');

$uid = $_SESSION['id'];

$_USER = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE `id` = '$uid'"));

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
        if ($email == 'admin@bookstore.com' && $password == 'Izadi') {
            $_SESSION['loggedin'] = true;
            $_SESSION['isadmin'] = true;
            header('location:' . $path . '/admin');
        } else if (mysqli_num_rows($user_query = mysqli_query($connection, "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'")) == 1) {
            $user = mysqli_fetch_assoc($user_query);
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $user['id'];
            header('location:' . $path . '/user');
        } else array_push($errors, 'اطلاعات وارد شده معتبر نمیباشد');
    }
}

if (isset($_POST['newbook']) && $_POST['newbook'] == 'upload') {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $category = mysqli_real_escape_string($connection, $_POST['category']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);

    if (empty($name)) array_push($errors, "نام کتاب الزامیست");
    if (empty($category)) array_push($errors, "دسته بنپدی کتاب الزامیست");
    if (empty($price)) array_push($errors, "قیمت کتاب الزامیست");

    // Creat ethe random ID
    $book_id = rand(111111111, 999999999);

    // Upload file
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $uploadFileDir = '../uploads/books/';

        $newFileName = $book_id . '.' . $fileExtension;

        $dest_path = $uploadFileDir . $newFileName;

        if(move_uploaded_file($fileTmpPath, $dest_path))  {
            array_push($errors, $message = 'کتاب با موفقیت آپلود شد');
        } else {
            array_push($errors, 'فایل آپلود نشد. لطفا دسترسی های پوشه را چک کنید.');
        }
    } else {
        array_push($errors, 'مشکلی در آپلود فایل کتاب به موجود آمده است.');
        array_push($errors, $_FILES['file']['error']);
    }

    // Upload pic
    if (isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['pic']['tmp_name'];
        $fileName = $_FILES['pic']['name'];
        $fileSize = $_FILES['pic']['size'];
        $fileType = $_FILES['pic']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $uploadFileDir = '../uploads/pics/';

        $newFileName = $book_id . '.' . $fileExtension;

        $dest_path = $uploadFileDir . $newFileName;

        if(move_uploaded_file($fileTmpPath, $dest_path))  {
            array_push($errors, $message = 'کتاب با موفقیت آپلود شد');
        } else {
            array_push($errors, 'فایل آپلود نشد. لطفا دسترسی های پوشه را چک کنید.');
        }
    } else {
        array_push($errors, 'مشکلی در آپلود فایل کتاب به موجود آمده است.');
        array_push($errors, $_FILES['pic']['error']);
    }

    if (mysqli_query($connection, "INSERT INTO books (`book-id`, `book-name`, `price`, `category`, `owner`) VALUES ('$book_id', '$name', '$price', '$category', '$uid')")) header('location:' . $path . '/user/grid.php');
    else array_push($errors, "مشکلی پیش آمده است.");
}

if (isset($_GET['delete'])) {
    $book_id = $_GET['delete'];
    if (mysqli_query($connection, "DELETE FROM books WHERE `book-id` = '$book_id'")) {
        header('location:' . $path . '/user/table.php');
    }
}

if (isset($_POST['complaints'])) {
    $who = mysqli_real_escape_string($connection, $_POST['who']);
    $text = mysqli_real_escape_string($connection, $_POST['text']);

    if (empty($who)) array_push($errors, "نام خود را وارد کنید.");
    if (empty($text)) array_push($errors, "پیام خود را وارد کنید.");

    if (count($errors) == 0) {
        if (mysqli_query($connection, "INSERT INTO complaints (`who`, `text`) VALUES ('$who', '$text')")) {
            header('location:' . $path . '/pages/protest.php');
        }
    }
}