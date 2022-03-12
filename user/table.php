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
  <title>مالی و فروش</title>
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
              <h4 class="text-success card-header">کتاب های شما</h4>
              <div class="card-body">
                <?php
                  if (mysqli_num_rows($get_books = mysqli_query($connection, "SELECT * FROM books WHERE owner = '$user_id'")) != 0) {
                    while ($book = mysqli_fetch_assoc($get_books)) {
                      $book_id = $book['book-id'];
                        ?>
                        <span>
                          <?php echo $book['book-name']; ?>
                          <a href="?delete=<?php echo $book_id; ?>"><i class="fa fa-trash text-danger float-start"></i></a>
                        </span>
                        <hr>
                        <?php
                    }
                  } else echo '<span>کتابی آپلود نکرده اید.</span>';
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="m-1">
            <h3 class="text-success">راهنما محصولات</h3>
            <br>
            <p>
              قسمتی برای مدیریت کتاب های افزوده شده خود.
            </p>
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