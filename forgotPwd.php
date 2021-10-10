<?php
  include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/formstyle.css">
<title>FORGOT PASSWORD</title>
</head>

<div class="signup-form-form">
  <section class="section-default">
    <h1>CONFIRM EMAIL</h1>
    <form style="text-align:center;" action="resetPwd.inc.php" method="post">
      <p>Enter your Email to reset password</p>
      <input type="text" name="email" placeholder="Enter your email">
      <br><button type="submit" name="reset-submit">Submit</button>
    </form>
  
  </section>
</div>