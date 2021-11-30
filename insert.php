<?php
  session_start();

  if (!($_SESSION['role']) == "1") {
    header("Location: index.php");
    exit;
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

  <title>Add Instrument</title>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/postajax.js"></script>
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

<div>
  <h6 id="status" class="m-5"></h6>
</div>

<h2 class="m-5" id = "results">Add an instrument</h2>
<div class="m-5">

  <form class="form-group" id="addInstrument" enctype="multipart/form-data" method="post">
    <div class="form-group row p-2">
      <label for="name" class="col-sm-2 col-form-label">Name </label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="instrumentName" name="name" placeholder="Instrument Name" required>
      </div>
    </div>

    <div class="form-group row p-2">
      <label for="type" class="col-sm-2 col-form-label">Type</label>
      <div class="col-sm-10">
        <select class="form-select" name="type" required>
          <option value="1">Guitar</option>
          <option value="2">Bass</option>
          <option value="3">Drums</option>
          <option value="4">Orchestral</option>
          <option value="5">Accessory</option>
          <option value="6">Other</option>
        </select>
      </div>
    </div>

    <div class="form-group row p-2">
      <label for="description" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="instrumentDesc" name="description"
          placeholder="Description (max 1000 characters)" maxlength="1000"></textarea>
      </div>
    </div>

    <div class="form-group row p-2">
      <label for="brand" class="col-sm-2 col-form-label">Brand/Manufacturer</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="instrumentBrand" name="brand" placeholder="Brand/Manufacturer"
          required>
      </div>
    </div>

    <div class="form-group row p-2">
      <label for="stock" class="col-sm-2 col-form-label">Number In Stock</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="instrumentStock" name="stock" placeholder="Stock" required>
      </div>
    </div>

    <div class="form-group row p-2">
      <label for="price" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="instrumentStock" step = "0.01" name="price" placeholder="Price" required>
      </div>
    </div>

    <div class="form-group row p-2">
      <label for="photo" class="col-sm-2 col-form-label">Upload Image</label>
      <div class="col-sm-10">
        <input type="file" class="form-control-file" name="photo" id="imageFile" required>
      </div>

    </div>
    <div  class="form-group row p-5 ">
          <input class="form-control bg-primary text-white" type="submit" name="submit" value="SUBMIT">
    </div>

  </form>
</div>





<!-- Option 1: Bootstrap Bundle with Popper -->
<script async src="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<div hidden id="snipcart" data-api-key="Mzk3NTJiZWQtYjI2YS00MDhhLTg0Y2ItNmIxYTc1NTEwODU3NjM3NjcxNjcxNjEyOTExNDU0"></div>

</body>

</html>