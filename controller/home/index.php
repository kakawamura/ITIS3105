<?php
require("../../db/database.php");
require("../../db/california_db.php");
include("../../view/header.php");
$users = get_users();
?>
<main>
  <header>
    <h2>Home</h2>
  </header>
</main>
<?php
include("../../view/footer.php");
?>

