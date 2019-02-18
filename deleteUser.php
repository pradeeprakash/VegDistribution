<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $name=$_POST['un'];
 $sql="DELETE FROM `customer` WHERE `name` = '$name'";
  if (mysqli_query($con, $sql)) {
      header('Location: admin.html');
    }
    else {
    echo "Error: wrong user deleted";
    }
?>