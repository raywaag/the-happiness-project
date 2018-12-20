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
      <h2 class="contact-mast">Talk to us!</h2>
      <p class="contact-mast-p">
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

    <!--contact form-->
    <form action = "proj3_contact.php" method = "POST">
    	<fieldset>
    		<legend>Contact Us</legend>
    		Name: <input type="text" name="name"><br><br>
    		E-mail: <input type="email" name="email"><br><br>
    		Comment: <textarea name="comment" rows="5" cols="40"></textarea></br>
    		<input  style="margin-bottom:20px;" class="submit" type="submit" name="submit"><br>
    	</fieldset>

    </form>
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
