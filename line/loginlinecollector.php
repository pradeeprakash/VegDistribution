<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php 
session_start();
$con=mysqli_connect('localhost:3306','root','','tomato');
$name=$_POST["psw"];
//echo "$name";
$sql="SELECT * FROM `linecollecter` WHERE 1";
$e1="";
$e2="";
$e3="";
$pp="";

if ($result=mysqli_query($con,$sql))
  {
 while ($row=mysqli_fetch_row($result))
    {
    $e1=$row[0];
    $e2=$row[1];
    $e3=$row[2];
    $pp=$row[3];
    $sg=$row[4];
    }
}
 echo "$name";
 echo "$e2";
// echo "$e3";
// echo "$pp";
    if($name==$e1)
    {
        $_SESSION["line"] = "erode-1";
        header('Location: linetable.php');
    }
    else if($name==$e2)
    {
        $_SESSION["line"] = "erode-2";
        header('Location: linetable.php');
    }
    else if($name==$e3)
    {
        $_SESSION["line"] = "erode-3";
        header('Location: linetable.php');
    }
    else if($name==$pp)
    {
        $_SESSION["line"] = "palliyapalayam";
        header('Location: linetable.php');
    }
    else if($name==$sg)
    {
        $_SESSION["line"] = "sivageri";
        header('Location: linetable.php');
    }
    else 
    {
     header('Location: index.php');
    }
?>
</body>
</html>