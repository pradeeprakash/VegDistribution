<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php 
session_start();
$con=mysqli_connect('localhost:3306','root','','tomato');
$name=$_POST["uname"];
echo "$name";
$sql="SELECT `password` FROM `user` WHERE username='$name'";
if ($result=mysqli_query($con,$sql))
  {
 while ($row=mysqli_fetch_row($result))
    {
    $pass=$row[0];
    echo "$pass";
    if($pass==$_POST["psw"])
    {
        header('Location: first.php');
    }
    else
    {
     header('Location: index.php');
    }
    
    }
}
?>
</body>
</html>