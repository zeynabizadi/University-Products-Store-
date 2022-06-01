<?php

session_start();

include('../resources/config/config.php');
include('../resources/routes/routes.php');

if (isset($_SESSION['loggedin'])) {
  if (isset($_SESSION['isuser'])) header('location:' . $path . '/user');
} else header('location:' . $path . '/client');

?>

<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://blackiq.github.io/cdn-university-bookstore/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://blackiq.github.io/cdn-university-bookstore/css/style.css">
  <link rel="stylesheet" href="https://blackiq.github.io/cdn-university-bookstore/css/styleuser.css">
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
    <?php include('../resources/widgets/admin-sidebar.php'); ?>
    <div class="b-example-divider"></div>
    <div class="container" style="padding-top: 5%;">
      <div class="row">
        <div class="col-md-6">
          <div class="m-1">
            <div class="card border">
              <h4 class="text-primary card-header">اضافه کردن محصول جدید</h4>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="grid.php">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="m-1">
                        <label for="name" class="form-label text-dark">نام کتاب</label>
                        <input class="form-control" id="name" name="name" placeholder="نام کتاب">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="m-1">
                        <label for="category" class="form-label text-dark">دسته بندی کتاب</label>
                        <select class="form-select" id="category" name="category">
                          <option value="null" default>انتخاب دسته بندی</option>
                          <option value="humanities">علوم انسانی</option>
                          <option value="medical">علوم پزشکی</option>
                          <option value="science">علوم پایه</option>
                          <option value="engineering">فنی و مهندسی</option>
                          <option value="art">هنر</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <br>
                  <label for="price" class="form-label text-dark">قیمت کتاب</label>
                  <input class="form-control" id="price" name="price" placeholder="قیمت کتاب">
                  <br>
                  <label for="pic" class="form-label text-dark">عکس کتاب</label>
                  <input type="file" class="form-control" id="pic" name="pic">
                  <br>
                  <label for="file" class="form-label text-dark">فایل کتاب</label>
                  <input type="file" class="form-control" id="file" name="file">
                  <br>
                  <button name="newbook" value="upload" type="submit" class="btn btn-primary w-100 btn">افزودن کتاب</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="m-1">
            <h3 class="text-primary">راهنما افزودن محصول جدید</h3>
            <br>
            <p>
              در اینجا کتاب مد نظر را همراه با عکس کاور کتاب آپلود میکنید.
            </p>
            <p>
              اطلاعات مورد نیاز برنامه، نام کتاب، قیمت و فایل های عکس و خود کتاب میباشد.
            </p>
            <?php
            if (count($errors) != 0) {
            ?>
              <hr>
              <ul>
                <?php
                foreach ($errors as $error) {
                ?>
                  <li><?php echo $error; ?></li>
                <?php
                }
                ?>
              </ul>
            <?php
            }
            ?>
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