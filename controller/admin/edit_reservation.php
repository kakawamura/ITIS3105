<?php
include('../../db/reservation_table.php');
$reservation_id = filter_input(INPUT_POST, 'reservation_id');
$login_id = filter_input(INPUT_POST, 'login_id');
$room_number  = filter_input(INPUT_POST, 'room_number');
$from_date = filter_input(INPUT_POST, 'from_date');
$to_date = filter_input(INPUT_POST, 'to_date');
update_reservation($reservation_id, $login_id, $room_number, $from_date, $to_date);

$admin_page = "./admin_page.php";
header('Location: ' . $admin_page);
?>
