<?php
  session_start();
  if(empty($_SESSION["loggedin"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
    header("LOCATION:proj3_login.php"); /* REDIRECT USER TO LOGIN PAGE */
  }
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
      <h2 class="mood-mast">Mindful Mood</h2>
      <p class="mood-mast-p">
        Here is a space where you can document your feelings, relieve your
        sadness and distract if needed.
      </p>
    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">
    <h3 class="mood-head">How are you today?</h3>
    <p class="mood-p"><a href="proj3_bad.php">Not great.</a></p></br>
    <p><a href="proj3_good.php">I am content.</a></p></br>
    <p><a href="proj3_great.php">I am fabulous.</a></p>
  </div>
   </div>
  </div>
</div>

<div class="footer">
  <p>Created by <a href="http://rachelwaag.com">Rachel Waag</a>, to remind us that we are only human & we are trying our best & that is <i>always</i> enough.</p>
</div>
</div>

</body>
</html>
