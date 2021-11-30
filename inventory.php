<?php
  include 'php/connect.php';
  session_start();

  if (!($_SESSION['role']) == "1") {
    header("Location: index.php");
    exit;
  } 

  if (isset($_REQUEST['delete'])){ 
    $id = $_REQUEST['id']; 
    $command = "DELETE FROM inventory WHERE itemid = $id";
    $stmt = $dbh->prepare($command);
    $stmt ->execute();
    
  }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://app.snipcart.com">
  <link rel="preconnect" href="https://cdn.snipcart.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.css" />

  <title>Inventory Management</title>
  <script src="js/jquery-3.6.0.min.js"></script>
</head>


<!-- Duplicate this into Javascript so all pages can have the same NavBar -->
<div id="nav-placeholder">
</div>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
  $.get("nav/nav.php", function (data) {
    $("#nav-placeholder").replaceWith(data);
  });
</script>

<div class = "container mt-5">
<h1>Inventory Management</h1>
  <table class = "table mt-5">
    <?php
      include 'php/connect.php';
    	$command = "SELECT * FROM inventory";
      $stmt = $dbh->prepare($command);
      $stmt ->execute();
      if ($stmt->rowCount() > 0){
        echo "<thead> <tr> <th>ID</th> <th>Name</th> <th>Type</th> <th>Brand</th> <th>No. In Stock</th> <th>Price ($)</th> <th>Rating (Out of 5)</th> <th>Delete</th> <th>Edit</th> </tr> </thead>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          echo "<tr> <td>". $row['itemid'] ."</td><td>" . $row['name'] ."</td><td>" . $row['type'] ."</td><td>" . $row['brand'] ."</td><td>". $row['stock'] ."</td><td>". $row['price'] ."</td><td>". $row['rating'] ."</td><td><form action = '' method = 'POST'><input type='hidden' name = 'id' value = '". $row['itemid'] . "'><input type = 'submit' class = 'btn btn-sm btn-danger' name = 'delete' value = 'Delete'></form></td> <td><a href = 'editinstrument.php?id=". $row['itemid'] ."' class = 'btn btn-sm btn-primary'>Edit</a></td></tr>";
        }
      }
    ?>
  </table>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script async src="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<div hidden id="snipcart" data-api-key="Mzk3NTJiZWQtYjI2YS00MDhhLTg0Y2ItNmIxYTc1NTEwODU3NjM3NjcxNjcxNjEyOTExNDU0"></div>

</body>

</html>