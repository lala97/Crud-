<?php
  include 'config.php';
  if (isset($_POST)) {
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $age=$_POST['age'];
    $id=$_POST['id'];
    $sql="UPDATE telebe SET adi='$ad',soyadi='$soyad',age=$age WHERE id=$id";

    $querry=mysqli_query($conn,$sql);
    if ($querry) {
       header('Location:show.php');
    }
    else {

     }
  }
 ?>
