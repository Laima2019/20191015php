<?php
include "app/index1.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.js">
      <link rel="stylesheet" href="assets/js/bootstrap.js">
      <link rel="stylesheet" href="assets/js/jquery.js">
      <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
      <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/first.html">First</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/second.html">Second</a>
            </li>
        </ul>
    </div>
</nav>
<p>Cia yra pagrindinis</p>


<h1><?php print $h1; ?></h1>
<h2><?php print $h2; ?></h2>
<h3><?php print $h3; ?></h3>
<br>
<h1><?php print $h4; ?></h1>
<h2><?php print $h5; ?></h2>


<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
