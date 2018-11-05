 <input type="button" class="btn btn-warning" name="click" onclick="order()" value="PreView">
<script type="text/javascript">
  function order()
  {
    alert("hi");
   var v1=order.v1.value;
   var v2=order.v2.value;
   var v3=order.v3.value;
   <?php 
   $con=mysqli_connect('localhost:3306','root','','tomato');
   $sql="SELECT `tomato1`, `tomato2`, `tomato3` FROM `variety_price` WHERE 1";
    if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
      $name=$row[0];
      ?>
      document.getElementById("bil").innerHTML+=<?php echo "$name";?>;
      <?php
    } 
  } 
  mysqli_free_result($result);
?>
}
</script>