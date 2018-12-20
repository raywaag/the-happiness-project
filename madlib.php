<html>
  <form method="POST" action="">
    <fieldset>
          <legend>MadLib Your Worries Away</legend>
          <label for="noun">Noun: </label>
          <input id="noun" type="textarea" name="noun" />
          <br />
          <label for="verb">Verb: </label>
          <input id="verb" type="textarea" name="verb" />
          <br />
          <label for="place">Place: </label>
          <input id="place" type="textarea" name="place" />
          <br />
          <label for="name">A Name: </label>
          <input id="name" type="textarea" name="name" />
          <br />
          <label for="adj">Adjective: </label>
          <input id="adj" type="textarea" name="adj-1" />
          <br />
          <label for="adj">An Adjective ending in -ly: </label>
          <input id="adj" type="textarea" name="adj-2" />
          <br />
          <label for="adj">ANOTHER Adjective: </label>
          <input id="adj" type="textarea" name="adj-3" />
          <br />
          <label for="adj">One More Adjective (ending in -ly): </label>
          <input id="adj" type="textarea" name="adj-4" />
          <br />
          <input id="submit" type="submit" name="submit" value="Let's go!" />
      </fieldset>
  </form>
  <pre>
</div>
</html>
<?php
    if ($_POST) {
        ?>
        <p style="font-size:20px; text-align:center; float:left; margin-top: 20px; color: red; line-height: 30px; text-align: left;">
          There once was a <?php print ($_POST["noun"]);?>
          that loved to <?php print ($_POST["verb"]);?>.
          Its favorite place to <?php print ($_POST["verb"]);?> was <?php print ($_POST["place"]);?>.
          One day, he asked his friend <?php print ($_POST["name"]);?> for company on his <?php print ($_POST["verb"]);?>ing journey.
          <?php print ($_POST["name"]);?> said no because it'd make her look too <?php print ($_POST["adj-1"]);?>.
          The <?php print ($_POST["noun"]);?> <?php print ($_POST["adj-2"]);?> walked away. <?php print ($_POST["name"]);?>
          finally stopped him and said "Well, since you're so <?php print ($_POST["adj-3"]);?>, I may just have to come along with you."
          And they lived <?php print ($_POST["adj-4"]);?> ever after.
      </p>
      <?php
    }
    else if ($_GET) {
    print "GET!\n";
    print_r($_GET);
    }
    else {
    print "<div style ='font-size:20px; text-align:center; float:left; margin-top: 20px; color: red;'>Let's get mad up in this lib!!\n</div>";
    }
?>
</pre>
<style>
form{
  text-align: left;
  line-height: 40px;
}
form label{
  font-size: 15px;
}
</style>
