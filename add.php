

<?php
    error_reporting(0); //Hides the unrequired "Notice"/errors display
  echo "Hello"." user"."<br>"; //user can be changed into the proper name of the user
  function add($a,$b) //funtion that adds
  {
    return ($a+$b);
  }
  ?>
  <! a form that takes in the numbers->
  <form action = "add.php" method="post">
  <input type = "integer" name="v1">
  <input type = "integer" name="v2">
  <input type = "submit" value="submit">
</form>
  <?php
  $a=$_POST['v1'];//1st value
  $b=$_POST['v2'];//2nd value
  echo "Addition of the above numbers is: ".add($a,$b);//displays the addition.
?>
