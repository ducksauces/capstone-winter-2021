<?php
  session_start();
  
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://app.snipcart.com">
  <link rel="preconnect" href="https://cdn.snipcart.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.css" />

  <title>Mountain Music - Catalogue</title>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/ajaxrequest.js"></script>
</head>


<!-- Duplicate this into Javascript so all pages can have the same NavBar -->

<div id="nav-placeholder">
</div>

<script>
  $.get("nav/nav.php", function(data) {
    $("#nav-placeholder").replaceWith(data);
  });
</script>

<div class="container-fluid m-3">
  <div class="row">
    <div class="col-2 m-3">
      <h3>Filters</h3>
      <h4>Brand</h2>
        <ul id="filters" style="list-style-type:none;">
        </ul>
        <h4>Type</h2>
          <ul id="filtersType" style="list-style-type:none;">
          </ul>
    </div>

    <div class="col">
      <h2>Catalogue</h2>
      <h5 id="numResults">
        </h3>


    <div class="row">
      <div id="products" class = "row">
    </div>
  </div>

</div>



</div>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script async src="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<div hidden id="snipcart" data-api-key="Mzk3NTJiZWQtYjI2YS00MDhhLTg0Y2ItNmIxYTc1NTEwODU3NjM3NjcxNjcxNjEyOTExNDU0"></div>

</body>

</html>