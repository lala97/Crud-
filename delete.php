<?php
   $id=$_GET['id'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
      input{
    float:left;
      }
  </style>
  <body>
    <div class="container">
        <h1>Delete a Customer</h1>
        <div class="alert alert-danger">
        Are you sure to delete?
      </div>
      <div class="jumbotron">
          <div class="container">
            <form action="delete.php" method="post">
              <input type="submit" class="btn btn-danger" name="yes" value="Yes">
              <input type="hidden" name="id" value="<?= $id ?>">
              <input type="submit" class="btn btn-default" name="No" value="No">
            </form>
          </div>
      </div>
    </div>
  </body>
</html>

<?php
   include 'config.php';

   if (isset($_POST['yes'])) {
     $id1 = $_POST['id'];
     $sql="DELETE FROM telebe WHERE id=$id1";
     $querry=mysqli_query($conn,$sql);
     var_dump($sql);
     if ($querry) {
       header('Location:show.php');
     }
      else {
        echo "ERROR";
      }
   }
   if (isset($_POST['No'])) {
       header('Location:show.php');
   }
 ?>
