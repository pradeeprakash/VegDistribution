<!DOCTYPE html>
<html>
<head>
	<title>Bendding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	  <style>
  .header {
    background-color: #2456ad;
  }
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2456ad;
   color: white;
   text-align: center;
}
.card {
  padding:6px; 
}
.card1 {
	width: 40%;
	height: 50%
	padding: 2%;
}
</style>
<script type="text/javascript">
  function f()
  {
    alert("BOX and Amount Successfully added");

  }
</script>
</head>
<body>
	  <div class="card header">
    <div class="card-body text-center"><b><h3>RECEIVE</h3></b></div>
  </div>
  <br>
  <br>
  <center>
    <div class="container">
    <h1><?php $name=$_POST['text']; echo "$name";
    $con=mysqli_connect('localhost:3306','root','','tomato'); 
    session_start();
    $l=$_SESSION["line"];
    $sql="SELECT * FROM `bending` WHERE name='$name'";
          $dat=0;
          $bbox=0;
          $bamount=0;
      if ($result=mysqli_query($con,$sql))
     {
        while ($row=mysqli_fetch_row($result))
       { 

         $dat=$row[0];
         $bbox=$row[3];
         $bamount=$row[4];

       }
     }
     else
     {
          $dat=0;
          $bbox=0;
          $bamount=0;
     }
    ?>
    </h1>
    <div class="alert alert-danger">
      <h6>DATE:<b><?php  echo "$dat"; ?></b></h6>
    <h6>BOX:<b><?php  echo "$bbox"; ?></b>  AMOUNT:&#8377;<b><?php echo "$bamount"; ?></b></h6>
    </div>
  	  <div class="card1">
  	<form action="bendding1.php" method="post">
    <input type="hidden" name="tex" value=<?php echo "$name";?>>  
	<b>BOX COUNT: </b><input type="number" name="box"><br><br>
	<b>AMOUNT:  </b><input type="number" name="amount"><br><br>
  <b>DISCOUNT:  </b><input type="number" name="discount"><br><br>
	<input type="submit" onclick="f()" class="btn btn-primary" name="submit"  value="Receive">
</form>
  </div>
  </center>


<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>