<?php 
    $con=mysqli_connect('localhost:3306','root','','tomato');
    session_start();
    $l=$_SESSION["line"];
     $nam=$_POST['tex']; 
     $sql="SELECT * FROM `bending` WHERE name='$nam'";

      if ($result=mysqli_query($con,$sql))
     {
        while ($row=mysqli_fetch_row($result))
       { 
         $bbox=$row[3];
         $bamount=$row[4];

       }
     }
      $box=(int)$bbox-(int)$_POST['box'];
      $discount=(int)$_POST['discount'];
      $totalamount=(int)$_POST['amount']+$discount;
      $amount=(int)$bamount-$totalamount;
      $sql="INSERT INTO `bending`(`date`, `name` , `line` , `box`, `price` , `discount`) VALUES (now(),'$nam','$l','$box','$amount',' $discount')";
     if (mysqli_query($con, $sql)) {
        header('Location: linetable.php');
      }
      else {
       echo "Error: wrong user added";
      }
   ?>