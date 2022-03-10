<?php

include('../resources/config/config.php');

$category = $_GET['category'];

?>

<!DOCTYPE html>
<html lang="fa-IR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../resources/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="../resources/css/style.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>فروشگاه</title>
</head>
 <body>
 <?php include('../resources/widgets/navbar.php'); ?>
<br class="clear both">
<br>
  <main>
    <ul class="nav menu">
        <li class="nav-item">
           <a class="nav-link" href="#anesthesia">هوشبری</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#surgeryroom">اتاق عمل</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#medical">پزشکی</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="#nursing">پرستاری</a>
        </li>
      </ul>
      <br>
    <div class="section container">
      <ul class="nav justify-content-end navsection container">
        <li class="nav-item">
          <a class="nav-link" href="#">گرانترین</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> ارزان ترین</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">پرفروش ترین</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">محبوب ترین</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">جدید ترین </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" tabindex="-1" aria-disabled="true" href="#"> :مرتب سازی بر اساس</a>
        </li>
      </ul>
      <br>
      <div class="container">
        <h2 id="category"><?php echo $category; ?></h2>
        <br>
        <div class="row">
            <?php
                if (isset($category)) {
                  if (mysqli_num_rows($get_books = mysqli_query($connection, "SELECT * FROM books WHERE category = '$category'")) != 0) {
                    while ($book = mysqli_fetch_assoc($get_books)) {
                        ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?php echo $book['iamge-link']; ?>" class="card-img-top">
                                <div class="card-body text-center">
                                <h6 class="card-title"><?php echo $book['book-name']; ?></h6>
                                <br>
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart"></i>
                                    افزودن به سبد خرید
                                </button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                  } else echo '<h4>کتابی در این دسته بندی یافت نشد.</h4>';
                } else {
                  if (mysqli_num_rows($get_books = mysqli_query($connection, "SELECT * FROM books")) != 0) {
                    while ($book = mysqli_fetch_assoc($get_books)) {
                        ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?php echo $book['iamge-link']; ?>" class="card-img-top">
                                <div class="card-body text-center">
                                <h6 class="card-title"><?php echo $book['book-name']; ?></h6>
                                <br>
                                <button class="btn btn-success">
                                    <i class="fa fa-shopping-cart"></i>
                                    افزودن به سبد خرید
                                </button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                  } else echo '<h4>کتابی یافت نشد.</h4>';
                }
            ?>
        </div>
      </div>
    </div>
     <!----------------------------------------------------------------------------------
       -----------------------------------------------------------------------------------
       -----------------------------        START SIDEBAR       --------------------------
      ------------------------------------------------------------------------------------
      ------------------------------------------------------------------------------------>
    <div class="sidebar">
      <br>
        <div class="box">
          <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <div class="show">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onkeyup="myFunction()">
                    <label class="form-check-label" for="flexSwitchCheckDefault"><b>نمایش کالاهای موجود</b></label>
                  </div>
                </div>
            </a>
            <ul class="list-unstyled ps-0" id="myUL">
              <li class="mb-2">
                <button class="btn btn-toggle  rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                  ناشر
                </button>
                <div class="collapse " id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">
                      <input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search">
                    </a></li>
                    <li>
                      <a href="#" class="link-dark rounded">
                        <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                              انتشارات دانشگاه تهران
                          </label>
                       </div>
                     </a>
                   </li>
                    <li>
                      <a href="#" class="link-dark rounded">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            انتشارات خسروی
                          </label>
                        </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link-dark rounded">
                      <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            انتشارات جامعه نگر
                        </label>
                     </div>
                   </a>
                 </li>
                  <li>
                      <a href="#" class="link-dark rounded">
                        <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                              انتشارات سیمین
                          </label>
                       </div>
                     </a>
                   </li>
                   <li>
                    <a href="#" class="link-dark rounded">
                      <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            انتشارات سیمین
                        </label>
                     </div>
                   </a>
                 </li>
                 <li>
                  <a href="#" class="link-dark rounded">
                    <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          انتشارات آراه
                      </label>
                   </div>
                 </a>
               </li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  سال چاپ
                </button>
                <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    
                    <li><a href="#" class="link-dark rounded"> <input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search"></a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۴۰۰
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۳۹۹
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۳۹۸
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۳۹۷
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۳۹۶
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۳۹۵
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          ۱۳۹۴
                        </label>
                      </div>
                    </a></li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                  رشته
                </button>
                <div class="collapse" id="orders-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded"> <input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search"></a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          هوشبری
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          اتاق عمل
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          پرستاری
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          پزشکی
                        </label>
                      </div>
                    </a></li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                 نویسنده و مترجم
                </button>
                <div class="collapse" id="account-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded"><input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search"></a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          مسعود فقیهی
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          جان ادوارد هال
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          لیلا ساداتی
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          دن لونگو
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          حسین خلیلی
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          سینا دوبرادران
                        </label>
                      </div>
                    </a></li>
                    <li><a href="#" class="link-dark rounded">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          لارنس 
                        </label>
                      </div>
                    </a></li>
                  </ul>
                </div>
              </li>
          </div> 
        </div>
    </div>
    <div style="clear:both;"></div>                                
  </main>
  <?php include('../resources/widgets/modal-navbar.php'); ?>

<?php include('../resources/widgets/footer.php'); ?>
<script src="../resources/js/jquery-3.6.0.min.js"></script>
<script src="../resources/js/script.js"></script>
<script src="../resources/js/mdb.min.js"></script>
 </body>
</html>   