<?php 

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';


?>

<?php include_once './parts/header.php'; ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light text-center">
    <div class="col-md-5 p-lg-5 mx-auto ">
    <img src="images/win.png" alt>
        <h1 class="display-4 fw-normal">اربح استضافة مجانية</h1>
        <p class="lead fw-normal">باقي على التسجيل</p>
        <h3 id="countdown"></h3>
        <P class="lead fw-normal"> للسحب</P>
    </div>
    <div class="container">
    <h3>للدخول في السحب اتبع الشروط التاليه:</h3>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">1- يجب ان يكون لديك موقع جاهز</li>
        <li class="list-group-item">2- يجب ان لا يكون لديك اي مواقع مستضافة حاليا</li>
        <li class="list-group-item">3- ان يحتوي الموقع على CSS وان يمكون جميل المظهر</li>
        <li class="list-group-item">4- ان تكون قاعدة البيانات جاهزة</li>
        <li class="list-group-item">5- ان يكون الموقع امان ضد الاخترقات</li>
        <li class="list-group-item">6- يحب ان يتم ادخال اسمك واسم العائله والايميل الإلكتروني الحقيقيه </l1>
    </ul>
    </div>
</div>



    <div class="container">


        <div class="position-relative text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <h3 text-center >قم بادخال بياناتك</h3>
    <br>

    <div class="mb-3">
        <label for="firstname" class="form-label">الاسم الاول</label>
        <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $firstname ?>" >
        <div class="form-text error"><?php echo $errors['firstnameError']  ?></div>
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">اسم العائله</label>
        <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $lastname ?>" >
        <div class="form-text error"><?php echo $errors['lastnameError']  ?></div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">الايميل الإلكتروني</label>
        <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" >
        <div class="form-text error"><?php echo $errors['emailError']  ?></div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">ارسال</button>
    </form>
    </div>

    </div>



<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5"  >
    <button type="button" id="winner" class="btn btn-primary" >
    اختيار الرابح
    </button>
</div>

<!-- Modal -->

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
<canvas class="coco" id="canvas"></canvas>
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="modalLabel">الرابح في المسابقه</h5>

        

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach ($users as $user): ?>
        <h5 class=" display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($user['firstname']) .' '. htmlspecialchars($user['lastname']);?> </h5>
        <?php endforeach; ?>


      </div>
    </div>
  </div>
</div>









<?php include './parts/footer.php'; ?>



  