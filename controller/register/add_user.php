<!-- register page -->
<?php

include("../../view/header.php");
include("../../db/database.php");
include("../../db/california_db.php");
$login_id= filter_input(INPUT_POST, 'login_id');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$password = filter_input(INPUT_POST, 'password');

// Validate the inputs
if ( $login_id ===NULL || $first_name === NULL || 
    $last_name === NULL || 
    $password === NULL) {
    $error = "Invalid technician data. Check all fields and try again.";
    echo "ERROR!";
    //include('../errors/error.php');
} else {
  add_user($login_id, $first_name, $last_name, $password);
  echo "User Add success";
}

?>
