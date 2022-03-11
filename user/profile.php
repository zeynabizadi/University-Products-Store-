<?php

  session_start();

  include('../resources/config/config.php');
  include('../resources/routes/routes.php');

  if (empty($_SESSION['loggedin'])) header('location:' . $path . '/client');

  $user_id = $_SESSION['id'];

  $user = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM users WHERE `id` = '$user_id'"));

?>

<!DOCTYPE html>
<html lang="fa-IR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../resources/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="../resources/css/style.css">
  <link rel="stylesheet" href="../resources/css/styleuser.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>پروفایل</title>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>
<body>
  <?php include('../resources/widgets/navbar.php'); ?>
  <main>
    <?php include('../resources/widgets/sidebar.php'); ?>
    <div class="b-example-divider"></div>
    <div class="container" style="padding-top: 5%;">
      <div class="row">
        <div class="col-md-6">
          <div class="m-1">
            <div class="card border">
              <h4 class="text-secondary card-header">اطلاعات پایه</h4>
              <div class="card-body">
                <span>
                  <i class="fa fa-user text-secondary"></i>
                  <?php echo $user['name'] . ' ' . $user['lastname']; ?>
                  <br>
                  <i class="fa fa-envelope text-secondary"></i>
                  <?php echo $user['email']; ?>
                  <br>
                  <i class="fa fa-mobile text-secondary"></i>
                  <?php echo $user['phone']; ?>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="m-1">
            <h3 class="text-secondary">راهنما پروفایل</h3>
            <br>
            <p>
              در این قسمت شما میتوانید اطلاعات ثبت شده خود را چک کنید و تغییر دهید.
            </p>
          </div>
        </div>
      </div>
      <br><hr><br>
      <div class="row">
        <div class="col-md-6">
            <div class="m-1">
              <h3 class="text-danger">راهنما کد کاربر</h3>
              <br>
              <p>
                کد کاربر قسمتی هست که کاربر به کد اختصاصی خود میتواند دسترسی داشته باشد.
              </p>
              <p>
                در مواقعی نیاز به کد کاربر هست که به صورت پابلیک نمایش داده نمیشد.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="m-1">
              <div class="card border">
                <h4 class="text-danger card-header">اطلاعات کد کاربر</h4>
                <div class="card-body">
                  <p>
                    برایی نمایش کلید،
                    <b class="pointer" id="showkey">اینجا</b>
                    کلیک کنید.
                  </p>
                  <span>
                    <i class="fa fa-key text-danger"></i>
                    <span id="key"><?php echo $user['id']; ?></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('../resources/widgets/modal-navbar.php'); ?>
  <?php include('../resources/widgets/footer.php'); ?>

  <script src="../resources/js/jquery-3.6.0.min.js"></script>
  <script src="../resources/js/script.js"></script>
  <script src="../resources/js/mdb.min.js"></script>
</body>
</html>   