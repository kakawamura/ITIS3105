<?php
include("../../view/header.php");
?>

<main>
  <?php
  if (array_key_exists('is_logged_in',$_SESSION) && !empty($_SESSION['is_logged_in'])) :
    include('./reserve.php');
  else: 
  ?>
    <p>please log in</p>
    <a href="../login/index.php">Login</a>
    <a href="../register/index.php">Register</a>
  <?php endif; ?>
</main>

<script type="text/javascript" src="../../js/datetimepicker.js"></script>
<?php
include("../../view/footer.php");
?>
