<?php
include('../../db/room_table.php');
include('../../db/reservation_table.php');
$room_number = filter_input(INPUT_POST, 'room_number');
$login_id = filter_input(INPUT_POST, 'login_id');
$from = filter_input(INPUT_POST, 'from');
$to = filter_input(INPUT_POST, 'to');
echo $from;
echo $to;

insert_reservation($room_number, $login_id, $from, $to);
include('../../view/header.php');
?>
<p>Reservation Sucessful</p>
<?php
include('../../view/footer.php');

?>
