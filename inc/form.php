<?php 

error_reporting(0);
$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =     $_POST['email'];

$errors = [
    'firstnameError'=> '',
    'lastnameError'=> '',
    'emailError'=> '',
];

  
if (isset ($_POST['submit'])) {




    //تحقق الاسم الاول
    if(empty($firstname) ){
        $errors["firstnameError"] = "الاسم الاول فارغ";

    }
    //تحقق الاسم الاخير
    if(empty($lastname) ){
        $errors["lastnameError"] = "اسم العائلة فارغ";
    }
    //تحقق الايميل
    if(empty($email) ){
        $errors["emailError"] = "الايميل الإلكتروني فارغ";
    }
    
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["emailError"] = "الايميل الإلكتروني خاطئ";
    }
     //تحقق لا يوجد اخطاء
    
    if(!array_filter($errors)){

        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname =  mysqli_real_escape_string($conn,$_POST['lastname']);
        $email =     mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "INSERT INTO users(firstname, lastname, email) 
        VALUES ('$firstname','$lastname','$email')";

        if(mysqli_query($conn, $sql)){
            header('Location:' . $_SERVER['PHP_SELF']);
        }else{
            echo 'failed ' . mysqli_error($conn);
        }

    }
}




