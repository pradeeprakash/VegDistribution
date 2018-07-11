<!DOCTYPE>
<html>
<head>
	<title>BILL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
    $("#bt").click(function(){
      var p1=parseInt($('#p1').text());
      var p2=parseInt($('#p2').text());
      var p3=parseInt($('#p3').text());
      var v1=parseInt($('#v1').val());
      var v2=parseInt($('#v2').val());
      var v3=parseInt($('#v3').val());
      var discount=parseInt($('#disc').val());
      var price=parseInt(p1*v1+p2*v2+p3*v3);
      var tot_price=price-discount;

        $(".bi").html("<div class='container center'> <div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><table border='1'><tr><th>VARIETY</th><th>BOX COUNT</th><th>PRICE</th><th>AMOUNT</th></tr><tr><td><strong>VARIETY1:</strong></td><td>"+v1+"</td><td>"+p1+"</td><td>"+v1*p1+"  Rs</td></tr><tr><td><strong>VARIETY2:</strong></td><td>"+v2+"</td><td>"+p2+"</td><td>"+v2*p2+" Rs</td></tr><tr><td><strong>VARIETY3:</strong></td><td>"+v3+"</td><td>"+p3+"</td><td>"+v3*p3+"  Rs</td></tr><tr><td></td><td></td><td><strong>PRICE:</strong></td><td>"+price+" Rs</td></tr><tr><td></td><td></td><td><strong>Discount:</strong></td><td>"+discount+" Rs</td></tr><tr><td></td><td></td><td><strong>Total price:</strong></td><td>"+tot_price+" Rs</td></tr></table>.</div>");
    });
});
</script>
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
	text-align:center;
	padding: 2%;
  color: pink;
}
body {
background-color: #373d47;
}
</style>
</head>
<body>
	  <div class="card header">
    <div class="card-body text-center"><b><h3>ORDER</h3></b></div>
  </div>
<div class="card text-center">
  <?php 
   $con=mysqli_connect('localhost:3306','root','','tomato');
   $dat=date('Y-m-d');
   $sql="SELECT * FROM `variety_price` WHERE date='$dat'";
     if ($result=mysqli_query($con,$sql))
     {
        while ($row=mysqli_fetch_row($result))
       {  ?>
          
        <h6 class="text-warning">Best Price: <span id="p1"><?php echo "$row[1]";?></span>Rs</h6>
        <h6 class="text-warning">Middle Price:<span id="p2"><?php echo "$row[2]";?></span>Rs</h6>
        <h6 class="text-warning">Worst Price: <span id="p3"><?php echo "$row[3]";?></span>Rs</h6>
        <?php
      }
    }
  ?>
</div>
 <a href="table.php"><input type="button" class="btn btn-warning btn-md" name="back" value="<<Back"></a>
  <center>
    <h1 style="color: white"><?php $name=$_POST['text']; echo "$name";?></h1>

  	  <div class="card1">
  	<form action="bill1.php" method="post">
      <input type="hidden" name="cname" value=<?php echo "$name";?>>
	<b>VARIETY1:</b><input type="number" name="v1" id="v1"><br><br>
	<b>VARIETY2: </b><input type="number" name="v2" id="v2"><br><br>
  <b>VARIETY3: </b><input type="number" name="v3" id="v3"><br><br>
   <b>Discount </b><input type="number" name="discount" id="disc"><br><br>
 </center>
 <span class="bi"></span>
 <center>
 <input type="button" id="bt" class="btn btn-primary" value="Preview">
	<input type="submit" class="btn btn-primary" name="submit" value="order">
</form>
  </div>
  </center>
  <br>
  <br>
  <br>
<div class="footer">
  <br>
</div>
</body>
</html>