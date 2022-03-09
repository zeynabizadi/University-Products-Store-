<!DOCTYPE html>
<html lang="fa-IR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../resources/css/mdb.min.css" rel="stylesheet" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="../resources/css/style.css">
  <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
  <title>بازگشت کالا</title>
</head>
<body>
<?php include('../resources/widgets/navbar.php'); ?>
    <br>
    <br>
    <br>
    <br>
     <!-------------------------------------------------
        --------------------------------------------------
        -----------------START MAIN ---------------------
        --------------------------------------------------
       --------------------------------------------------->
      <main>
        <div class="container" style="text-align: center;" >
          <h2>ثبت شکایت</h2>
           <h4>.لطفا برای ثبت شکایت فرم زیر را پر کنید</h4>
           <br>
           <form>
            <div class="mb-3 col-md-4">
              <label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="نام کاربری یا آدرس ایمیل خود را وارد کنید">
            </div>
            <div class="mb-3 col-md-4">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">متن شکایت خود را در اینجا وارد کنید</label>
                <br>
                <button type="submit" class="btn btn-dark">ثبت  شکایت </button>
              </div>
            </div>
            <br>
            <br>
        </form>
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
             <li class="nav-item mb-2"><a href="back.php" class="nav-link p-0 text-muted">بازگشت کالا</a></li>
             <li class="nav-item mb-2"><a href="warranty.php" class="nav-link p-0 text-muted"> ضمانت کالا</a></li>
             <li class="nav-item mb-2"><a href="delivery.php" class="nav-link p-0 text-muted">نحوه تحویل کالا</a></li>
          </ul>
         </div>
      <div class="col-2">
        <h5>خدمات مشتریان</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="qustions.php" class="nav-link p-0 text-muted">سئوالات متداول</a></li>
          <li class="nav-item mb-2"><a href="protest.php" class="nav-link p-0 text-muted">ثبت شکایت</a></li>
          <li class="nav-item mb-2"><a href="guide.php" class="nav-link p-0 text-muted">راهنمای خرید</a></li>
        </ul>
      </div>
      <div class="col-4 offset-1">
        <form>
          <p>با اشتراک در خبرنامه از آخرین و بهترین پیشنهادها مطلع شوید</p>
          <div class="d-flex w-100 gap-2">
            <button class="btn btn-dark" type="button">اشتراک</button>
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="پست الکترونیکی خود را وارد کنید">
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