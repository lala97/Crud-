<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .create{
      background: green;
      border-radius:5px;
      color:white;
      padding: 10px 15px;
    }
    .update{
      background: green;
    color: white;
    background: green;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;

    }
    table{
      margin-top:20px;
    }

    td{
      height: 40px;
      width: 150px;
    }
    tr td:first-child{
      display: none;
    }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>PHP CRUD Grid</h1>
        <div class="row">
    <table  class="table table-bordered">
      <thead>
      <tr>
        <td><b>id<b></td>
          <td><b>ad</b></td>
           <td><b>soyad</b></td>
             <td><b>yas</b></td>
              <td><b>Action</b></td>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'config.php';
      $sql="SELECT * FROM telebe";
      $querry=mysqli_query($conn,$sql);
      if ($querry) {
         while($row=mysqli_fetch_assoc($querry)){  ?>
           <tr>
          <?php foreach ($row as $key => $value) {
            echo "<td>$value</td>";
         } ?>
        <td>
          <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success">Update</a>
           <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">DELETE</a>
        </td>
         </tr>
      <?php  }

      }
    ?>
      <a href="add.php?id=<?php echo $row['id']?>" class="create">Create</a>
    </tbody>
    </table>
  </div>
</div>
  </body>
</html>
