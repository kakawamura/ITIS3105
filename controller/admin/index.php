<main>
  <header>
    <h2>Admin</h2>
  </header>
  <form action="./authenticate_login.php" method="post">
  <p>Please Enter Admin's username and password</p>
    <label>Login
      <input type="text" class="text" value="" name="login_id">
    </label><br />

    <label>Password: 
      <input type="password" class="text" value="" name="password">
    </label>
      <br />
    <input type="submit" class="submit" value="Login" name="">
  </form>
</main>
<?php
include("../../view/footer.php");
?>
