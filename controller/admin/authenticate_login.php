<!-- login page -->
<?php
include("../../db/database.php");
include("../../db/california_db.php");
session_start();

$login_id= filter_input(INPUT_POST, 'login_id');
$password = filter_input(INPUT_POST, 'password');

// Validate the inputs
if ( $login_id === NULL || $password === NULL) {
    echo "ERROR!";
    //include('../errors/error.php');
} else {

  $user = get_user_login("admin", $password);
  if ( $user != NULL) {
    $_SESSION['login_id'] = $user[0]["login_id"];
    $_SESSION['password'] = $user[0]["password"];
    $_SESSION['is_logged_in'] = true;

    header('Location: '. '../admin/admin_page.php');
  } else {
    echo "Login failed";
  }
}

?>
