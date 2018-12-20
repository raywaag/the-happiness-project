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
      <h2 style="margin-left: 10%; font-size: 70px;">Talk to us!</h2>
      <p style="margin-left: 10%; font-size: 4vw;">
        Have good news to share? We want to hear it!
      </p>
    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">

      <!--contact form confirmation-->
        <p style="font-size:30px;">
          Thank you
          <?php print $_POST["name"];?>!
          <br>
          We will reach out to <?php print $_POST["email"];?> shortly!
          </p>

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
