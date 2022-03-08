<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap Css-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--Style Css-->
    <link rel="stylesheet" href="resources/Css/style.css">
    <title>فروشگاه محصولات دانشگاهی</title>
</head>
<body>
       <!-------------------------------------------------
        --------------------------------------------------
        -----------------START NAVBAR---------------------
        --------------------------------------------------
       --------------------------------------------------->
    <header>
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> <img src="resources/image/icon.png" width="50px" height="50px" alt="icon"> فروشگاه محصولات دانشگاهی</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">فروشگاه محصولات دانشگاهی</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages/Engineering.php"  role="button"  aria-expanded="false">
                      فنی مهندسی
                      </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link " href="pages/Humanities.php"  role="button"  aria-expanded="false">
                        علوم انسانی
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/Science.php"  role="button"  aria-expanded="false">
                        علوم پایه
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/Medical Sciences.php"  role="button" aria-expanded="false">
                        علوم پزشکی
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/art.php"  role="button"  aria-expanded="false">
                        هنر
                        </a>
                      </li>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">جستجو</button>
                      </form>
                </div>
              </div>
            </div>
          </nav>  
    </header>
      <!-------------------------------------------------
        --------------------------------------------------
        ----------------- START CAROUSEL   -------------- 
        --------------------------------------------------
        --------------------------------------------------->
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active"> 
                <img class="bd-placeholder-img" src="resources/image/carousel3.jpg"  alt="" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></ه>
        
                <div class="container">
                  <div class="carousel-caption text-start" style="color: black; text-align: right;">
                    <h1>همین الان ثبت نام کن</h1>
                    <p>برای خریدو فروش کتاب اول توی سایت ثبت نام کنید</p>
                    <p><a class="btn btn-lg btn-dark" href="adduser.php">ثبت نام</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" src="resources/image/knowledge.jpg" alt="" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                
                <div class="container">
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" src="resources/image/carousel1.png" alt="register" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
               
                <div class="container">
                  <div class="carousel-caption text-end">
                    <form class="d-flex">
                      <button class="btn btn-outline-dark" style="margin-right: 9px; " type="submit">جستجو</button>
                      <input class="form-control me-5"  style="text-align: right;"type="search" placeholder="دنبال چی میگردی" aria-label="Search">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
         <!-----------------------------------------------
        --------------------------------------------------
        ------------- START CONTAINER MARKETING  --------
        -------------------------------------------------
        -------------------------------------------------->

  <div class="container marketing marketing">
    <div class="row">
      <div class="col-lg-4">
        
        <img class="bd-placeholder-img rounded-circle"  src="resources/image/discount.png"width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

        <h2>تخفیفات ویژه</h2>
        <br>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle"  src="resources/image/New product.png"width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

        <h2>کتاب دست دوم</h2>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle"  src="resources/image/free delivery.png"width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>

        <h2>ارسال رایگان</h2>
      </div>
    </div>

    <hr class="featurette-divider">
    <h2 >:)کتابایی که میتونید باکد تخفیف بگیرید</h2>
    <br>
    <div class="row">
      <div class="col">
        <div class="card">
          <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/169725?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب پرستاری کودکان وونگ</h6>
              <a href="#" class="btn btn-success btncard">افزودن به سبد خرید  <i class="bi bi-cart-check-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></i></a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card">
          <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/169560?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب قارچ شناسی</h6>
              <a href="#" class="btn btn-success btncard">افزودن به سبد خرید  <i class="bi bi-cart-check-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></i></a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card">
            <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/168725?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب تکنیک تابلوخوانی </h6>
              <a href="#" class="btn btn-success btncard">افزودن به سبد خرید  <i class="bi bi-cart-check-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></i></a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card">
          <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/106017?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب سینمای طبیعی</h6>
              <a href="#" class="btn btn-success btncard">افزودن به سبد خرید  <i class="bi bi-cart-check-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></i></a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card">
          <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/168606?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب گام به گام در بورس</h6>
              <a href="#" class="btn btn-success btncard">افزودن به سبد خرید  <i class="bi bi-cart-check-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></i></a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card">
          <br>
            <img src="https://www.gajmarket.com/api/v1/picture/product/168730?size=200&mimeType=image/webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">کتاب معامله گران میلیونر</h6>
              <a href="#" class="btn btn-success btncard">افزودن به سبد خرید  <i class="bi bi-cart-check-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg></i></a>
            </div>
          </div>
      </div>
    </div>
    <br>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">توانایی خواندن یکی از مهمترین مهارت‌های اساسی دنیای امروز است و مطالعه برای داشتن ارتباط با جامعه امروز ضروری است<span class="text-muted"></span></h2>
        <br>
        <p class="lead">اگه میخوای بقیه مقاله رو بخونی بزن اینجا</p>
        <p><a class="btn btn-secondary" href="http://enshasara.ir/%D8%AF%D8%B1%D9%85%D9%88%D8%B1%D8%AF-%DA%A9%D8%AA%D8%A7%D8%A8-%DA%A9%D8%AA%D8%A7%D8%A8%D8%AE%D9%88%D8%A7%D9%86%DB%8C/">بزن بریم&raquo;</a></p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="resources/image/11070.jpg" alt="" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
      </div>
    </div>
    <br>
  </div>
    </main>
    <!-------------------------------------------------
        --------------------------------------------------
        -----------------START FOOTER---------------------
        --------------------------------------------------
       --------------------------------------------------->
<footer>   
<div class="container-fluid">
  <footer class="py-5" style="text-align: center;">
    <div class="row">
      <div class="col-3">
          <img src="resources/image/payment.png" alt="payment">
          <h6>پرداخت امن از درگاه بانکی</h6>
      </div> 
      <div class="col-3">
           <img src="resources/image/Quality.png" alt="Quality">
           <h6>تضمین کیفیت کالا</h6>
      </div> 
      <div class="col-3">
          <img  src="resources/image/Guarantee.png" alt="Guarantee">
          <h6>فرصت 1 روزه بازگشت کالا</h6>
      </div> 
      <div class="col-3">
        <img src="resources/image/Support.png" alt="Support">
        <h6>پشتیبانی 24 ساعته</h6>
      </div> 
    </div>
    <hr class="featurette-divider">
    <br>
    <div class="row">
      <div class="col-2">
        <h5>فهرست عناوین</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="pages/back.php" class="nav-link p-0 text-muted">بازگشت کالا</a></li>
          <li class="nav-item mb-2"><a href="pages/warranty.php" class="nav-link p-0 text-muted"> ضمانت کالا</a></li>
          <li class="nav-item mb-2"><a href="pages/delivery.php" class="nav-link p-0 text-muted">نحوه تحویل کالا</a></li>
        </ul>
      </div>
      <div class="col-2">
        <h5>خدمات مشتریان</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="pages/qustions.php" class="nav-link p-0 text-muted">سئوالات متداول</a></li>
          <li class="nav-item mb-2"><a href="pages/protest.php" class="nav-link p-0 text-muted">ثبت شکایت</a></li>
          <li class="nav-item mb-2"><a href="pages/guide.php" class="nav-link p-0 text-muted">راهنمای خرید</a></li>
        </ul>
      </div>
      <div class="col-4 offset-1">
        <form>
          <p>با اشتراک در خبرنامه از آخرین و بهترین پیشنهادها مطلع شوید</p>
          <div class="d-flex w-100 gap-2">
            <button class="btn btn-dark" type="button">اشتراک</button>
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="پست الکترونیکی خودراوارد کنید">
          </div>
        </form>
      </div>
      <div class="col-3">
        <p>ارتباط با ما</p>
        <ul class="share-buttons" data-source="simplesharingbuttons.com">
          <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="resources/images/flat_web_icon_set/black/Twitter.png" /></a></li>
          <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Share on LinkedIn" src="resources/images/flat_web_icon_set/black/LinkedIn.png" /></a></li>
          <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img alt="Send email" src="resources/images/flat_web_icon_set/black/Email.png" /></a></li>
        </ul>
      </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>