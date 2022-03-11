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
  <title>محصول</title>
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
      <p>محصول</p>
    </div>
  </main>

  <?php include('../resources/widgets/modal-navbar.php'); ?>
  <?php include('../resources/widgets/footer.php'); ?>

  <script src="../resources/js/jquery-3.6.0.min.js"></script>
  <script src="../resources/js/script.js"></script>
  <script src="../resources/js/mdb.min.js"></script>
</body>
</html>   