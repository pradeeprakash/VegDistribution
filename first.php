<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  .header {
    background-color: #2456ad;
  }
.card {
  padding:6px; 
}
</style>
</head>
<body style="background-color:#373d47">

  <div class="card header">
    <div class="card-body text-center"><b><h3>MY COMPANY NAME</h3></b></div>
  </div>
  <br>
  <br>
<div class="card text-center">
  <?php 
   $con=mysqli_connect('localhost:3306','root','','tomato');
   $dat=date('Y-m-d');
   $sql="SELECT * FROM `variety_price` WHERE date='$dat'";
     if ($result=mysqli_query($con,$sql))
     {
        while ($row=mysqli_fetch_row($result))
       {  ?>
          
        <h4 class="text-warning">Best Price: <?php echo "$row[1]";?>Rs</h4>
        <h4 class="text-warning">Middle Price:<?php echo "$row[2]";?>Rs</h4>
        <h4 class="text-warning">Worst Price:  <?php echo "$row[3]";?>Rs</h4>
        <?php
      }
    }
  ?>
</div>
<br>
<br>
<div class="text-center">
<a href="admin.html"><input type="button" class="btn btn-success" value="Admin"></a>
</div>
<br>
<br>
<!-- <div class="dropdown text-center">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    Line Root
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="table.php">Line 1</a>
    <a class="dropdown-item" href="table.php">Line 2</a>
    <a class="dropdown-item" href="table.php">Line 3</a>
  </div> -->
</div>
</body>
</html>