<?php
require 'db/connect.php';


include('session.php');


?>

<!DOCTYPE HTML>

<html>
<head>
<title>The Happiness Project</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="proj3.css">
</head>
<body>

  <div class="header">

  <?php include('navbar_collapse.html') ?>


  <div class="row">
  <div class="rightcolumn">
    <div class="column mast">
      <h2 style="margin-left: 15%; margin-top: 5%; font-size: 70px;">Welcome <?php echo $login_session; ?></h2>
      <h3 style="margin-left: 15%; margin-top: 5%;">You are logged in!</h3>

    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">

          <!--to log out -->
            <p style="font-size: 35px;">
              <a href="proj3_logout.php" style="margin-left:30%;">I want to logout.</a>
            </p>

  </div>
   </div>
  </div>
</div>

<div class="footer">
  <p>Created by <a href="https://rachelwaag.com/">Rachel Waag</a>, to remind us that we are only human & we are trying our best & that is <i>always</i> enough.</p>
</div>
</div>


</body>
</html>
