<?php
  session_start();
  include "php/adminaccessible.php";
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

  <title>Add Event</title>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/postevents.js"></script>
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

<h2 class="m-5" id = "results">Add an event</h2>
<div class="m-5">

  <form class="form-group" id="addEvent" enctype="multipart/form-data" method="post">
    <div class="form-group row p-2">
      <label for="name" class="col-sm-2 col-form-label">Name </label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="name" name="name" placeholder="Event name" required>
      </div>
    </div>


    <div class="form-group row p-2">
      <label for="description" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="description" name="description"
          placeholder="Description (max 500 characters)" maxlength="500"></textarea>
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