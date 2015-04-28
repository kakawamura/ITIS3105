<?php
include('../../db/reservation_table.php');
$reservation_id = filter_input(INPUT_POST, 'reservation_id');
echo $reservation_id;
delete_reservation($reservation_id);

$admin_page = "./admin_page.php";
header('Location: '.$admin_page);
?>
