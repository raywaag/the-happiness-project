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
      <h2 style="margin-left: 10%; font-size: 60px;">Hello!</h2>
      <p style="margin-left: 10%; font-size: 4vw;">
        Log in with your info below!
      </p>
      <span>Don't have an account?
      <br><a href="proj3_account.php">Create one here!</a></span>
    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">

      <?php
    include('login.php'); // Includes Login Script
    if(isset($_SESSION['loggedin'])){
    header("location: proj3_loginsuccess.php"); // Redirecting To Profile Page
    }
    ?>
          <form method="post" action="" style="margin-left:-10%;">
                  Username: <br />
                  <input type="text" name="username"><br/>
                  Password: <br />
                  <input type="text" name="password"><br />
                  <input style="background-color:lightblue; margin-left:-1%;" class="submit" type="submit" name="submit" value="Login!" />
          </form>
          <span><?php echo $error; ?></span>
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
<style>
