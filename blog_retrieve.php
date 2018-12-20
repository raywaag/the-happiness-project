 <?php
 //connect
 require_once('db/connect.php');
     if($db->connect_errno){
       echo "connection failed";
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
       <p style="font-size: 5vw;">
         Read away!! We hope you find some goodness in what others have to say.
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
         //select from db table
           $sql = "SELECT * FROM posts ORDER BY id DESC";
           //do something with selection
           $results = mysqli_query($db, $sql) or die(mysqli_error());

           if($results->num_rows > 0){
             while($row = $results->fetch_assoc()){
               echo $row['date'] . "<br>";
               echo "<br>";
               echo $row['title'] . "<br>";
               echo "<br>";
               echo $row['content'];
               echo '<p style="margin: 5%;"><hr></p>';
             }
           }else{
             echo "no entries here!";
           }
        ?>
        <p> <a href="blogform.php">Create your own entry here!</a></p>
   </div>
    </div>
   </div>
 </div>

 <div class="footer">
   <p>Created by <a href="http://rachelwaag.com">Rachel Waag</a>, to remind us that we are only human & we are trying our best & that is <i>always</i> enough.</p>
 </div>


 </body>
 </html>
