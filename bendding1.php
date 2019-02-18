<?php 
    $con=mysqli_connect('localhost:3306','root','','tomato');
     $nam=$_POST['tex']; 
     $sql="SELECT * FROM `bending` WHERE name='$nam'";

      if ($result=mysqli_query($con,$sql))
     {
        while ($row=mysqli_fetch_row($result))
       { 
         $bbox=$row[2];
         $bamount=$row[3];

       }
     }
      $box=(int)$bbox-(int)$_POST['box'];
      $amount=(int)$bamount-(int)$_POST['amount'];
      $sql="INSERT INTO `bending`(`date`, `name`, `box`, `price`) VALUES (now(),'$nam','$box','$amount')";
     if (mysqli_query($con, $sql)) {
        header('Location: table.php');
      }
      else {
       echo "Error: wrong user added";
      }
   ?>