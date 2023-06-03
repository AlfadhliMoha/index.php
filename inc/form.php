<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];

if (isset($_POST['submit'])) {
$sql ="INSERT INTO users(firstName, lastName, Email)
       VALUES ('$firstName', '$lastName', '$Email')";

if(empty($firstName)){
      echo 'يرجى ادخال الاسم الاول';
}elseif(empty($lastName)){
       echo 'يرجى ادخال الاسم الثاني';
}elseif(empty($Email)){
       echo 'يرجى ادخال الاسم الايميل';
}elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
  echo 'يرجى ادخال ايميل صحيح'; 
}else{
        if(mysqli_query($conn,$sql)){
          header('location:  index.php');
        }else{
          echo 'Error:' . mysqli_error($conn);
        }
}









}
