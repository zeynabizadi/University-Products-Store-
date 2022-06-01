<?php

session_start();

include('../resources/config/config.php');
include('../resources/routes/routes.php');

if (isset($_SESSION['loggedin'])) {
  if (isset($_SESSION['isuser'])) header('location:' . $path . '/user');
  else if (isset($_SESSION['isadmin'])) header('location:' . $path . '/admin');
}

?>

<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://blackiq.github.io/cdn-university-bookstore/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://blackiq.github.io/cdn-university-bookstore/css/style.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>ثبت نام کاربر</title>
</head>

<body>
  <?php include('../resources/widgets/navbar.php'); ?>
  <main class="container" style="text-align: center; padding-top: 5%;">
    <h1>ثبت نام</h1>
    <br>
    <?php
    if (count($errors) != 0) {
    ?>
      <ul>
        <?php
        foreach ($errors as $error) {
        ?>
          <li><?php echo $error; ?></li>
        <?php
        }
        ?>
      </ul>
      <br>
    <?php
    }
    ?>
    <form action="register.php" method="post">
      <div class="mb-3 col-md-4">
        <label for="name" class="form-label">نام</label>
        <input type="name" name="name" class="form-control" id="name" required>
      </div>
      <div class="mb-3 col-md-4">
        <label for="lastname" class="form-label">نام خانوادگی </label>
        <input type="lastname" name="lastname" class="form-control" id="lastname" required>
      </div>
      <div class="mb-3 col-md-4">
        <label for="phone" class="form-label">شماره تلفن </label>
        <input type="tel" name="phone" class="form-control" id="phone" required>
      </div>
      <div class="mb-3 col-md-4">
        <label for="email" class="form-label">آدرس ایمیل (با حروف کوچک وارد کنید) </label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3 col-md-4">
        <label for="password" class="form-label">رمز عبور</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      <br>
      <div class="mb-3 col-md-4">
        <button type="submit" name="register" class="btn btn-dark w-100">ثبت نام در فروشگاه </button>
      </div>
      <br>
      <label class="form-check-label" for="Check1">قبلا ثبت نام کرده اید؟ <a style="color: #990033 ;text-decoration: none;" href="login.php">وارد شوید</a></label>
    </form>
    <br>
  </main>
  <?php include('../resources/widgets/modal-navbar.php'); ?>
  <?php include('../resources/widgets/footer.php'); ?>

  <script src="../resources/js/jquery-3.6.0.min.js"></script>
  <script src="../resources/js/script.js"></script>
  <script src="../resources/js/mdb.min.js"></script>
</body>

</html>