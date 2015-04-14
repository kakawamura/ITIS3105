<!-- login page -->
<?php
  session_start();
  $_SESSION = array();
  session_destroy();
  header('Location: '. '../home/index.php');
?>
