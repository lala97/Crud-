<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        input{
          display: block;
          padding: 10px 15px;
          margin-bottom:20px;
        }
        .submit{
          background: green;
          border-radius:5px;
          color:white;
          float:left;
        }
        .back{
          background: white;
          color:black;
          border-radius:5px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Create a Customer</h1>
      <form action="create.php" method="post">
        <input type="text" name="ad" placeholder="Ad">
        <input type="text" name="soyad" placeholder="Soyad">
        <input type="number" name="age" placeholder="Yas">
        <input type="submit" class="submit" name="gonder" value="Gonder">
        <input type="submit" class="back" name="back" value="Back">
      </form>
    </div>


      <?php
       if (isset($_POST['gonder'])) {
         include 'config.php';
         $ad=$_POST['ad'];
         $soyad=$_POST['soyad'];
         $age=$_POST['age'];
         $sql="INSERT INTO telebe(adi,soyadi,age) VALUES ('$ad','$soyad','$age')";
         $querry=mysqli_query($conn,$sql);
         if ($querry) {
           header('Location:show.php');
         }
         else {
           echo "QOWULMUR";
         }
       }
       if (isset($_POST['back'])) {
          header('Location:show.php');
       }
       ?>
  </body>
</html>
