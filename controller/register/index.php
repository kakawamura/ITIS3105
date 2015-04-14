<!-- register page -->
<?php
include("../../view/header.php");
?>
<main>
  <header>
    <h2>Register</h2>
  </header>
<form action="./add_user.php" method="post">
  <label>First Name: </label>
  <input type="text" class="text" value="" name="first_name">
  <br>
  <label>Last Name: </label>
  <input type="text" class="text" value="" name="last_name">
  <br>
  <label>Login ID: </label>
  <input type="text" class="text" value="" name="login_id">
  <br>
  <label>Password: </label>
  <input type="password" class="text" value="" name="password">
  <br>
  <input type="submit" class="submit" value="Register" name="">
</form>
</main>
<?php
include("../../view/footer.php");
?>
