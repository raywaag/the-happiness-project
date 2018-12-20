<?php
// error_reporting(0); Set this error reporting off when published to avoid releasing information
require 'db/connect.php';
require 'functions/security.php';


if(!empty($_POST)){
  if(isset($_POST['username'], $_POST['password'], $_POST['animal'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $animal = $_POST['animal'];

    $encrypt = sha1($_POST['password']);

    $sql = "INSERT INTO people (username, password, animal) VALUES ('$username', '$encrypt', '$animal')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
  }
}
    mysqli_close($db);

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
      <h2 style="margin-left: 10%; font-size: 60px;">Welcome</h2>
      <p style="margin-left: 10%; font-size: 4vw;">
        Fill out some info below to join the family!
      </p>
      <span>Already have an account?
      <br><a href="proj3_login.php">Log in here!</a></span>
    </div>
  </div>
  </div>
</div>

<div class="row">
<div class="rightcolumn">
  <div class="column middle">
    <div class="column lower">

      <?php
      		function validateInput(){
      		$street = $_REQUEST["street"];
      		$state = $_REQUEST["state"];
      		$zip = $_REQUEST["zip"];
          $phone = $_REQUEST["phone"];
          $username = $_REQUEST["username"];
          $phone = preg_replace("/[^0-9]/", "", $phone);

      		if (!preg_match("/^\d+\ +[a-zA-Z ]+$/", $street)) {
      			print "The inputed address is invalid.";
      		}else if (strlen($state) != 2){
      			print "State must be a 2-letter acronym.";
      		}else if (!preg_match("/[A-Z]{2}/", $state)){
      			print "State must be all caps.";
      		}else if (strlen($zip) != 5){
      			print "Zip must be 5 numbers.";
      		} else if (strlen($phone) != 10){
      			print "Hm...Seemed more like a FAUX-ne number, please try again using 10 numbers.";
      		}else{
            header("refresh:5;url=proj3_home.php");
            print "Welcome, '" . $username . "'. You have successfully created an account. You will return home in just a few moments.";
          }
      	}

        if (!$_POST == ""){
          validateInput();
        }
      ?>

          <form method="POST" action="" style="margin-left:-10%;">
                  Username: <br />
                  <input type="text" name="username" id="username" autocomplete="off"><br/>
                  Password: <br />
                  <input type="text" name="password" id="password" autocomplete="off"><br />
                  Favorite Animal: <br />
                  <input type="text" name="animal" id="animal" autocomplete="off"><br />
                  Phone Number: <br />
                  <input type="text" name="phone"><br/>
                  Email: <br />
                  <input type="text" name="email"><br />
                  Street Address: <br />
                  <input type="text" name="street"><br/>
                  City: <br />
                  <input type="text" name="city" ><br />
                  Zip Code: <br />
                  <input type="text" name="zip"  size="5" maxlength="5" ><br/>
                  State: <br />
                  <input type="text" name="state" size="2" maxlength="2"><br />
                  <input style="background-color:lightblue; margin-left:-1%;" class="submit" type="submit" value="Login!" />
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
