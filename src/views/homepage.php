<?php
include __DIR__ . '/includes/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Sans+Narrow:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/assets/connection.js" defer></script>
<title>Sign App</title>
    </head>
    <body>
      
<div id="mainContainer">
  <form>
    <div class="container m-20" style="background-color: #f8f9fa;">
    <p class="fs-1">Welcome!</p>
      <div class="mb-3 column">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-7">
          <input  type="text" class="form-control" id="email" value="sally@smith.com">
        </div>
      </div>
    <div class="mb-3 column">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-7">
        <input type="password" class="form-control"value="sally" id="inputPassword">
        </div>
      </div>
        <button id='connectBtn' type="button" class="btn btn-primary" >Connect</button>
      </form>
    </div>
</div>
</div>
</body>