<?php
session_start();

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Hotel California</title>
</head>

<!-- the body section -->
<body>
<header>
    <h1>Hotel California</h1>
    <?php if (array_key_exists('is_logged_in',$_SESSION) && !empty($_SESSION['is_logged_in'])) { ?>
      <?php if ($_SESSION['is_logged_in'] == 1) { ?>
        <p><?php echo "Hello, " . $_SESSION['login_id']; ?></p>
        <a href="../login/logout.php">Sign Out</a>
      <?php } else { ?>
        <a href="../login/index.php">Log In</a>
        <a href="../register/index.php">Register</a>
      <?php } ?>
    <?php } else { ?>
      <a href="../login/index.php">Log In</a>
      <a href="../register/index.php">Register</a>
    <?php } ?>
    <nav>
        <ul>
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../aboutus/index.php">About Us</a></li>
            <li><a href="../amenities/index.php">Amenities</a></li>
            <li><a href="../findaroom/index.php">Find a Room</a></li>
            <li><a href="../reservation/index.php">Reservations</a></li>
        </ul>
    </nav>
  <img src="../../img/homepage.jpg" alt="">
</header>

