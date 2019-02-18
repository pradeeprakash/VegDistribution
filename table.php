<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}


  .header1 {
    background-color: #2456ad;
    
  }
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2456ad;
   color: white;
   text-align: center;
}
.card {
  padding:6px; 
}
#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
</head>
<body>
  <div class="card header1">
    <div class="card-body text-center"><b><h6>LINE CUSTOMERS</h6></b></div>
  </div>
    <a href="logout.php"><input type="button" class="btn btn-success btn-md" name="back" value="<<Back"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<div class="table-responsive">
<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Name</th>
    <th style="width:5%;"></th>
    <th style="width:5%;"></th>
  </tr>
  <?php 
  $l="";
  $sql1="";
  session_start();
 $con=mysqli_connect('localhost:3306','root','','tomato');
       if(strlen($_SESSION["line"])>0)
       {
         $l=$_SESSION["line"];
           // echo "string";
          $sql1="SELECT * FROM `customer` WHERE line='$l'";
       }
       else
       {

       }
       
       if ($result=mysqli_query($con,$sql1))
     {
        while ($row=mysqli_fetch_row($result))
       { ?>
        <tr>
         <td><?php echo "$row[0]";?>
         <?php echo "$row[1]";?></td>
         <td><form action="bill.php" method="post"><input type="hidden" name="text" value=<?php echo "$row[0]";?>><input type="submit"  value="Order >" class="btn btn-warning"></form></td><td><form action="bendding.php" method="post"><input type="hidden" name="text" value=<?php echo "$row[0]";?>><input type="submit"  value="Bendding >" class="btn btn-warning"></form></td>
         </tr>
         <?php   
       }

   } ?>
</table>
</div>
<div class="footer">
  <p>Footer</p>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
