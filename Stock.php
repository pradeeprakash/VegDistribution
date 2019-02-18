<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $s1=$_POST['s1'];
 $s2=$_POST['s2'];
 $s3=$_POST['s3'];
 $sql1="SELECT * FROM `stockmanage` WHERE 1";
     if ($result=mysqli_query($con,$sql1))
     {
        while ($row=mysqli_fetch_row($result))
       { 
             $os1=(int)$row[1];
             $os2=(int)$row[2];
             $os3=(int)$row[3];
      }
    }
     else {
    echo "0 results";
          }
          $ns1=(int)$os1+(int)$s1;
          $ns2=(int)$os2+(int)$s2;
          $ns3=(int)$os3+(int)$s3;
   $sql="INSERT INTO `stockmanage`(`date`, `stTomato1`, `stTomato2`, `stTomato3`) VALUES (now(),'$ns1','$ns2','$ns3')";
  if (mysqli_query($con, $sql)) {
      header('Location: first.php');
    }
    else {
    echo "Error: wrong user added";
    }
?>