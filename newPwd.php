<?php
  include_once 'header.php';
  require_once "resetPwd.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/formstyle.css">
<title>NEW PASSWORD</title>
</head>

<div class="signup-form-form">
  <section class="section-default">
    <h1>NEW PASSWORD</h1>
    <form style="text-align:center;" action="newPwd.php" method="post">
      <p>Enter your new password</p>
      <input type="password" name="pwd" placeholder="Create new password">
      <br><input type="password" name="cpwd" placeholder="Confirm your password">
      <br><button type="submit" name="reset-pwd">Submit</button>
    </form>
  
  </section>
</div>