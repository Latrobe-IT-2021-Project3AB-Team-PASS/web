<?php
  include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/formstyle.css">
<title>LOG IN</title>
</head>
<body>
<h1>LOG IN</h1>
<section class="signup-form">
    
  <div class="signup-form-form">
    <h2 style="text-align:center;">LOG IN HERE!</h2>
    <form action="login.inc.php" method="post" style="text-align: center;">
      <input type="text" name="uid" placeholder="Username">
      <br><input type="password" name="pwd" placeholder="Password">
      <br><button type="submit" name="submit" >Log In</button>
    </form>
    <div style="text-align:center"><li><a href="forgotPwd.php">Forgot Password?</a></li></div>
  </div>

  <section style="text-align:center;">
  <?php
    if (isset($_POST["error"])) {
      if ($_POST["error"] == "emptyInput") {
        echo "<p>!!PLEASE FILL IN ALL FIELDS!!</p>";

      }
      else if ($_POST["error"] == "wronglogin") {
        echo "<p>!!INCORRECT LOG IN!!</p>";
      }
    }

  ?>
  </section>


</section>
</body>
</html>
 
