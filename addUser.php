<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $name=$_POST['uname'];
 $city=$_POST['city'];
 $line=$_POST['line'];
 $sql="INSERT INTO `customer`(`name`, `city`, `line`) VALUES ('$name','$city','$line')";
  if (mysqli_query($con, $sql)) {
      header('Location: admin.html');
    }
    else {
    echo "Error: wrong user added";
    }
?>