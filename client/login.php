<?php

  include('../resources/config/config.php');
  include('../resources/routes/routes.php');

?>

<!DOCTYPE html>
<html lang="fa-IR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../resources/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="../resources/css/style.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>ورود به حساب کاربری</title>
</head>
<body>
  <?php include('../resources/widgets/navbar.php'); ?>
  <main class="container" style="text-align: center; padding-top: 5%;">
    <h1>ورود</h1>
    <br>
    <form action="login.php">
      <div class="mb-3 col-md-4">
        <label for="exampleInputEmail1" class="form-label">آدرس ایمیل (با حروف کوچک وارد کنید)</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 col-md-4">
        <label for="exampleInputPassword1" class="form-label">رمز عبور</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <br>
      <div class="mb-3 col-md-4">
        <button name="login" type="submit" class="btn btn-dark w-100">ورود به حساب کاربری خود </button>
      </div>
      <br>
      <label class="form-check-label" for="Check1">کاربر جدید هستید؟ <a style="color: #990033; text-decoration: none;" href="register.html">ثبت نام کنید</a></label>
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