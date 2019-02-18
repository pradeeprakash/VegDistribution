<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $p1=$_POST['op'];
 $p2=$_POST['np'];
 $sql1="SELECT  `password` FROM `user` WHERE 1"
 if ($result=mysqli_query($con,$sql1))
  {
 while ($row=mysqli_fetch_row($result))
    {
    $pass=$row[0];
    if($pass==$POST["op"])
    {
    $sql="UPDATE `user` SET `password`='$p2' WHERE 1";
    if (mysqli_query($con, $sql))
        header('Location: admin.html');
     else 
     echo "Error: wrong user added";
    }
   }
}
   