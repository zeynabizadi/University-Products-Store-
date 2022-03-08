<?php
function request($field)
{
 return isset($_REQUEST[$field])&& $_REQUEST[$field]!=''? trim($_REQUEST[$field]):null;
}
require 'func.php';
$errors=[];
$sucsess=false;

if($_SERVER['REQUEST_METHOO']=='POST'){
    $name=request('name');
    $lastname=request('lastname');
    $phone=request('phone');
    $email=request('email');
    $password=request('password');
   
    if (is_null($name)){
        $errors['name']='the name field cant to empty';
    }
    if (is_null($lastname)){
        $errors['lastname']='the lastname field cant to empty';
    }
    if (is_null($phone)){
        $errors['phone']='the phone field cant to empty';
    }elseif( strlen($phone)<8){
         $errors['phone']='the phone field cant be less than 8 charactor ';
    }
    if (is_null($email)){
        $errors['email']='the email field cant to empty';
    }
    if (is_null($password)){
        $errors['password']='the password field cant to empty';
    }elseif( strlen($password)<8){
         $errors['password']='the password field cant be less than 8 charactor ';
    }
    if(!is_null($name))&& !is_null($lastname))&& strlen($phone)>=8 && !is_null($email))&& strlen($password)>=8{
        $link=mysqli_connect('localhost:3306','root','');
        if(!$link){
            echo 'could not connect:'.mysqli_connect_error();
            exit();
        }
        mysqli_select_db($link, 'university');

        $statement=mysqli_prepare($link,"insert into users (name,lastname,phone,email, password) values(?,?,?,?,?)");
        mysqli_stmt_bind_param($statement,'sssss',$name,$lastname,$phone,$email,$password);
        if ($result=mysqli_stmt_execute($statement)){
              $sucsess = true;
        }else{
            echo'error:'.mysqli_error($link);
            exit();
            }
          } 
      }
?>
<!DOCTYPE html>
<html lang="fa-IR">
 <head>
     <!-- Required meta tags -->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--Bootstrap Css-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!--Style Css-->
     <link rel="stylesheet" href="resources/Css/syle.css">
     <title>ثبت نام</title>
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
                      <a class="nav-link active" aria-current="page" href="index.html">خانه</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Engineering.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      فنی مهندسی
                      </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Humanities.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        علوم انسانی
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Science.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        علوم پایه
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Medical Sciences.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        علوم پزشکی
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="art.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        هنر
                        </a>
                      </li>
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="دنبال چی میگردی" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">جستجو</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>  
    </header>
             <!----------------------------------------------------------------------------------
             -----------------------------------------------------------------------------------
             -----------------------------   start form sing in    -----------------------------
             ------------------------------------------------------------------------------------
            ------------------------------------------------------------------------------------>
     <main style="text-align: center;">
            <h1>ورود/ ثبت نام</h1>
            <h2>!خوش آمدید </h2>
            <br>
            <br>
                <form action="/PHP/adduser.php" method="POST">
                  <div class="mb-3 col-md-4">
                    <label for="name" class="form-label">نام</label>
                    <input type="name" name="name" class="form-control" id="name"required>
                    <?php if (has_error(field:'name')){ ?>
                         <span><?php echo get_error(field:'name'); ?></span>
                    <?php } ?>
                  </div>
                  <div class="mb-3 col-md-4">
                    <label for="lastname" class="form-label">نام خانوادگی </label>
                    <input type="lastname" name="lastname" class="form-control" id="lastname"required>
                    <?php if (has_error(field:'lastname')){ ?>
                         <span><?php echo get_error(field:'lastname'); ?></span>
                    <?php } ?>
                  </div>
                  <div class="mb-3 col-md-4">
                    <label for="phone" class="form-label">شماره تلفن </label>
                    <input type="tel" name="phone" class="form-control" id="phone"required>
                    <?php if (has_error(field:'phone')){ ?>
                         <span><?php echo get_error(field:'phone'); ?></span>
                    <?php } ?>
                  </div>
                    <div class="mb-3 col-md-4">
                      <label for="email" class="form-label">آدرس ایمیل (با حروف کوچک وارد کنید) </label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"required>
                      <?php if (has_error(field:'email')){ ?>
                         <span><?php echo get_error(field:'email'); ?></span>
                    <?php } ?>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label for="password" class="form-label">رمز عبور</label>
                      <input type="password" name="password" class="form-control" id="password"required>
                      <?php if (has_error(field:'password')){ ?>
                         <span><?php echo get_error(field:'password'); ?></span>
                    <?php } ?>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                    </div>
                    <button type="submit" class="btn btn-dark"required>ثبت نام در فروشگاه </button>
                    <br>
                    <br>
                    <label class="form-check-label" for="Check1">قبلا ثبت نام کرده اید؟ <a style="color: #990033 ;text-decoration: none;" href="Register.html">وارد شوید</a></label>
                </form>
                <br>
     </main>
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
                            <li class="nav-item mb-2"><a href="back.html" class="nav-link p-0 text-muted">بازگشت کالا</a></li>
                            <li class="nav-item mb-2"><a href="warranty.html" class="nav-link p-0 text-muted"> ضمانت کالا</a></li>
                            <li class="nav-item mb-2"><a href="delivery.html" class="nav-link p-0 text-muted">نحوه تحویل کالا</a></li>
                          </ul>
                        </div>
                  
                        <div class="col-2">
                          <h5>خدمات مشتریان</h5>
                          <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="qustions.html" class="nav-link p-0 text-muted">سئوالات متداول</a></li>
                            <li class="nav-item mb-2"><a href="protest.html" class="nav-link p-0 text-muted">ثبت شکایت</a></li>
                            <li class="nav-item mb-2"><a href="guide.html" class="nav-link p-0 text-muted">راهنمای خرید</a></li>
                          </ul>
                        </div>
                        <div class="col-4 offset-1">
                          <form>
                            <p>با اشتراک در خبرنامه از آخرین و بهترین پیشنهادها مطلع شوید</p>
                            <div class="d-flex w-100 gap-2">
                              <label for="newsletter1" class="visually-hidden">Email address</label>
                              <input id="newsletter1" type="text" class="form-control" placeholder="پست الکترونیکی خود را وارد کنید">
                              <button class="btn btn-dark" type="button">اشتراک</button>
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