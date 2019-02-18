<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $v1=(int)$_POST['v1'];
 $v2=(int)$_POST['v2'];
 $v3=(int)$_POST['v3'];
 $discount=(int)$_POST['discount'];
 $line="line1";
 $name=$_POST['cname'];
 $p1=0;
 $p2=0;
 $p3=0;
 $date=date("Y-m-d");
$sqls="SELECT * FROM `stockmanage` WHERE 1";
     if ($result=mysqli_query($con,$sqls))
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
          $ns1=(int)$os1-(int)$v1;
          $ns2=(int)$os2-(int)$v2;
          $ns3=(int)$os3-(int)$v3;
   $sqlu="UPDATE `stockmanage` SET `stTomato1`='$ns1',`stTomato2`='$ns2',`stTomato3`='$ns3' WHERE date='$date'";
  if (mysqli_query($con, $sqlu)) {
    }
    else {
    echo "Error: wrong user added";
    }
   $sql="SELECT * FROM `variety_price` WHERE date='$date'";
     if ($result=mysqli_query($con,$sql))
     {
        while ($row=mysqli_fetch_row($result))
       { 
             $p1=(int)$row[1];
             $p2=(int)$row[2];
             $p3=(int)$row[3];
      }
    }
     else {
    echo "0 results";
          }
        $x=($v1*$p1);
        $y=($v2*$p2);
        $z=($v3*$p3);
        $price=(int)$x+(int)$y+(int)$z;
        $tot=(int)$price-$discount;
 $sql1="INSERT INTO `order`(date,`name`, `line`, `tomato1`, `tomato2`, `tomato3`, `price`, `discount`, `total_amount`) VALUES (now(),'$name','$line','$x','$y','$z','$price','$discount','$tot')";

  if (mysqli_query($con, $sql1)) {
    }
    else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($con);;
    }
    $bbox=0;
    $bamount=0;
     $sql3="SELECT * FROM `bending` WHERE name='$name'";

      if ($result=mysqli_query($con,$sql3))
     {
        while ($row=mysqli_fetch_row($result))
       { 
         $bbox=$row[2];
         $bamount=$row[3];

       }
     }
    $tb=(int)$v1+(int)$v2+(int)$v3+(int)$bbox;
    $tam=(int)$tot+(int)$bamount;
    echo "$tb";
    $sql2="INSERT INTO `bending`(`date`, `name`, `box`, `price`) VALUES (now(),'$name','$tb','$tam')";
     if (mysqli_query($con, $sql2)) {
    header('Location: table.php');
    }
    else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
    }
?>
