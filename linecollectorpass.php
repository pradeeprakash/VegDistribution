<?php
 $con=mysqli_connect('localhost:3306','root','','tomato');
 $ep1=$_POST['e1'];
 $ep2=$_POST['e2'];
 $ep3=$_POST['e3'];
 $pp4=$_POST['pp'];
 $sgp5=$_POST['sg'];

$sql="INSERT INTO `linecollecter`(`erode-1`, `erode-2`, `erode-3`, `palliyapalayam`, `sivageri`) VALUES ('$ep1','$ep2','$ep3','$pp4','$sgp5')";
if (mysqli_query($con, $sql)) {
    header('Location: first.php');
}
else {
echo "Error: " . $sql1 . "<br>" . mysqli_error($con);;
}
?>