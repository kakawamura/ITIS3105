<!-- login page -->
<?php
include("../../view/header.php");
include("../../db/database.php");
include("../../db/california_db.php");

$login_id= filter_input(INPUT_POST, 'login_id');
$password = filter_input(INPUT_POST, 'password');

// Validate the inputs
if ( $login_id === NULL || $password === NULL) {
    $error = "Invalid technician data. Check all fields and try again.";
    echo "ERROR!";
    //include('../errors/error.php');
} else {

  $user = get_user_login($login_id, $password);
  if ( $user != NULL) {
 
    $_SESSION['login_id'] = $user[0]["login_id"];
    $_SESSION['password'] = $user[0]["password"];
    $_SESSION['is_logged_in'] = true;
    //redirect to the home page
    header('Location: '. '../home/index.php');
  } else {
    echo "Login failed";
  }
}

?>
