<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db.close.php';




















?>


<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">

>
    <title>THE WINER ALFADHLI</title>
</head>
<body>
  <!-- Content here -->

<div class="container">
<div class="position-relative text-center">
<div class="col-md-6 p-lg-5 mx-auto my-5 bg-light">
  <img src="images/moah.png"    width=" 150px" alt="" >
      <h1 class="display-4 fw-normal">اربح مع محمد</h1>
      <p class="lead fw-normal">باقي على اغلاق التسجيل.</p>
      <h4 id="countdown"></h4>
      <p class="lead fw-normal">للسحب على الجائزه الكبرى </p>

   
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block">
    <br>
    <h2>للدخول في السحب يرجى اتبع مايلي:</h2> 

    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر في صفحتي انا محمد الفضلي</li>
  <li class="list-group-item">البث سيكون لمدة ساعه سيكون اسئله واجوبه</li>
  <li class="list-group-item">صفحة التسجيل هنا ادخل اسمك وايميلك</li>
  <li class="list-group-item">سيتم اختيار فائز واحد بشكل عشوائي</li>
  <li class="list-group-item">الفائز سيحصل على الجائزه الكبرى</li>
</ul>
  </div>
</div>
 
</div>

<div class="container ">
<div class="position-relative text-right">
    <div class="col-md-5 p-lg-5 mx-auto my-5 bg-light">
<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول  </label>
    <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" value="<?php echo $firstName  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text" Error><?php echo $errors['firstNameError']  ?></div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير </label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?php echo $lastName  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text Error"><?php echo $errors['lastNameError']  ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني </label>
    <input type="text" name="Email" class="form-control " id="exampleInputEmail1" value="<?php echo $Email  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text Error"><?php echo $errors['EmailError']   ?></div>
  </div>



  <button type="submit" name="submit" class="btn btn-primary">ارسل المعلومات</button>
</form>
</div> 
</div>



<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
اختيارالفائز
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقه هو </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?> 
      <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']). '  '.htmlspecialchars($user['lastName']) . ' <br> '?></h1>

      </div>
     
    </div>
  </div>
</div>



     <?php endforeach;?>


     
     <script src="./js/bootstrap.bundle.min.js"> </script>
     <script src="./js/loader.js"></script>
    <script src="./js/script.js"></script>
</body>
<!--
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
</div>

-->

<!--

<form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lasttName" placeholder="Last Name">
    <input type="text" name="Email" id="Email" placeholder="Email">
    <input type="submit" name="submit" value="send">

</form>
-->
</html>