<?php

include('../resources/config/config.php');

?>

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
       <?php include('../resources/widgets/footer.php'); ?>
  <script src="../resources/js/mdb.min.js"></script>
</body>
</html>