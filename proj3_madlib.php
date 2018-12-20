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
      <h2>Who doesn't love a goofy game of mad lib?!</h2>
      <p>
        Fill out the form below to take a crack at making
        yourself laugh until you cry.
      </p>
    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">
      <?php
        include 'madlib.php';
      ?>
   </div>
  </div>
</div>

<div class="footer">
  <p>Created by <a href="http://rachelwaag.com">Rachel Waag</a>, to remind us that we are only human & we are trying our best & that is <i>always</i> enough.</p>
</div>
</div>


</body>
</html>
