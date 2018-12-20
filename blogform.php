<?php
// error_reporting(0); Set this error reporting off when published to avoid releasing information
require 'db/connect.php';
require 'functions/security.php';

$records = array();


if(!empty($_POST)){
  if(isset($_POST['date'], $_POST['title'], $_POST['content'])){

    $date = trim($_POST['date']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

//insert post into table "posts"
    if(!empty($title) && !empty($content) && !empty($date)){
      $insert = $db->prepare("INSERT INTO posts (title, content, date) VALUES(?, ?, ?)");
      $insert->bind_param('sss', $title, $content, $date);

//take user to blog_retrieve after hitting "Post!"
        if($insert->execute()){
          header("Location: blog_retrieve.php");
          die();
        }
    }
  }
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
      <p style="font-size: 4vw;">
        Below is your chance to share positive stories, damn good jokes or all around
        A+ jokes!<br>
        Remember, others can read these so let's keep it PG, folks.
      </p>
      <span><a href="blog_retrieve.php" style="margin-left: -5%; font-size: 2vw;">Click here to just go straight to the juicy content!</a></span>
    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">

    <!--contact form-->
    <form action = "blogform.php" method = "POST" enctype="multipart/form-data">
      <fieldset>
        <legend>Let the writing commence!</legend>
        <input placeholder="Today's Date" type="text" name="date" autofocus size="48"><br><br>
    		<input placeholder="Today's Entry Title" type="text" name="title" autofocus size="48"><br><br>
    		<textarea placeholder="Juicy content goes here..." name="content" rows="20" cols="50"></textarea></br>
    		<input  style="margin-bottom:20px;" class="submit" type="submit" name="post" value="Post!"><br>
      </fieldset>
    </form>
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
