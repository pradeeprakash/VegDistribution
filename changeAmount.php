<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $p1=$_POST['v1'];
 $p2=$_POST['v2'];
 $p3=$_POST['v3'];
 $sql="INSERT INTO `variety_price`(`date`, `tomato1`, `tomato2`, `tomato3`) VALUES (now(),'$p1','$p2','$p3')";
  if (mysqli_query($con, $sql)) {
      header('Location: first.php');
    }
    else {
    echo "Error: wrong user added";
    }
?>