<?php

include('resources/config/config.php');

?>

<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://blackiq.github.io/cdn-university-bookstore/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://blackiq.github.io/cdn-university-bookstore/css/style.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>فروشگاه محصولات دانشگاهی</title>
</head>

<body>
  <?php include('resources/widgets/navbar.php'); ?>
  <main>
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://blackiq.github.io/cdn-university-bookstore//images/new/carousel1.png" class="d-block w-100" alt="register">
          <div class="carousel-caption text-start">
            <h1 class="text-black">همین الان ثبت نام کن</h1>
            <p class="text-black">برای خرید کتاب اول توی سایت ثبت نام کنید</p>
            <p><a class="btn btn-lg btn-dark" href="client/register.php">ثبت نام</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://blackiq.github.io/cdn-university-bookstore//images/new/knowledge.jpg" class="d-block w-100" alt="search">
          <div class="carousel-caption text-start">
            <form class="d-flex">
              <input class="form-control border border-dark me-5" style="text-align: right;" type="search" placeholder="دنبال چی میگردی" aria-label="Search">
              <button class="btn btn-dark" style="margin-right: 9px; " type="submit">جستجو</button>
            </form>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://blackiq.github.io/cdn-university-bookstore//images/new/carousel3.jpg" class="d-block w-100" alt="login">
          <div class="carousel-caption text-start">
            <h1 class="text-black">وارد حساب شوید</h1>
            <p class="text-black">اگر در سایت حساب دارید، وارد حساب خود شوید!</p>
            <p><a class="btn btn-lg btn-dark" href="client/login.php">وارد شذن</a></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">قبل</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">بعد</span>
      </button>
    </div>
    <div class="container marketing marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" src="https://blackiq.github.io/cdn-university-bookstore//images/new//discount.png" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          <h2>تخفیفات ویژه</h2>
          <br>
        </div>
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" src="https://blackiq.github.io/cdn-university-bookstore//images/new//New product.png" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          <h2>جدید ترین کتاب ها</h2>
        </div>
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" src="https://blackiq.github.io/cdn-university-bookstore//images/new//free delivery.png" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          <h2>ارسال رایگان</h2>
        </div>
      </div>
      <hr class="featurette-divider">
      <h2>:)کتابایی که میتونید باکد تخفیف بگیرید</h2>
      <br>
      <div class="row">
        <div class="col">
          <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/169725?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب پرستاری کودکان وونگ</h6>
              <br>
              <button class="btn btn-success">
                <i class="fa fa-shopping-cart"></i>
                افزودن به سبد خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/169560?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب قارچ شناسی</h6>
              <br>
              <button class="btn btn-success">
                <i class="fa fa-shopping-cart"></i>
                افزودن به سبد خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/168725?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب تکنیک تابلوخوانی </h6>
              <br>
              <button class="btn btn-success">
                <i class="fa fa-shopping-cart"></i>
                افزودن به سبد خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/106017?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب سینمای طبیعی</h6>
              <br>
              <button class="btn btn-success">
                <i class="fa fa-shopping-cart"></i>
                افزودن به سبد خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/168606?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب گام به گام در بورس</h6>
              <br>
              <button class="btn btn-success">
                <i class="fa fa-shopping-cart"></i>
                افزودن به سبد خرید
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/168730?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب معامله گران میلیونر</h6>
              <br>
              <button class="btn btn-success">
                <i class="fa fa-shopping-cart"></i>
                افزودن به سبد خرید
              </button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <div class="m-1">
            <h2 class="featurette-heading">توانایی خواندن یکی از مهمترین مهارت‌های اساسی دنیای امروز است و مطالعه برای داشتن ارتباط با جامعه امروز ضروری است<span class="text-muted"></span></h2>
            <br>
            <p class="lead">اگه میخوای بقیه مقاله رو بخونی بزن اینجا</p>
            <p><a class="btn btn-secondary" href="http://enshasara.ir/%D8%AF%D8%B1%D9%85%D9%88%D8%B1%D8%AF-%DA%A9%D8%AA%D8%A7%D8%A8-%DA%A9%D8%AA%D8%A7%D8%A8%D8%AE%D9%88%D8%A7%D9%86%DB%8C/">بزن بریم&raquo;</a></p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="m-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="resources/images/new//11070.jpg" alt="" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('resources/widgets/modal-navbar.php'); ?>

  <?php include('resources/widgets/footer.php'); ?>
  <script src="resources/js/jquery-3.6.0.min.js"></script>
  <script src="resources/js/script.js"></script>
  <script src="resources/js/mdb.min.js"></script>

</body>

</html>