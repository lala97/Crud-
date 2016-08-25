<?php
      include 'config.php';
       $id=$_GET['id'];

       $sql="SELECT adi,soyadi,age FROM telebe WHERE id=$id";
       $querry=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($querry);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input{
          display: block;
          padding: 10px 15px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Update a Customer</h1>
      <div class="col-md-4 col-md-offset-3">
        <form action="update.php" method="post">
          <label class="form-control-label">Name</label>
          <input class="form-control"  type="text" name="ad" placeholder="Ad" value="<?php echo $row['adi'] ?>">
            <label class="form-control-label">Soyad</label>
          <input class="form-control"  type="text" name="soyad" placeholder="Soyad" value="<?php echo $row['soyadi'] ?>">
            <label class="form-control-label">Yas</label>
          <input class="form-control"  type="hidden" name="id" value="<?php echo $id ?>" >

          <input class="form-control"  type="number" name="age" placeholder="Yas" value="<?php echo $row['age'] ?>">
          <input type="submit" name="gonder" value="Update"  class="btn btn-success">
            <input type="submit" name="gonder" value="Back"  class="btn btn-default">
        </form>
      </div>
  </div>
  </body>
</html>
