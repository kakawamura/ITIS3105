<?php
include('../../db/reservation_table.php');
$reservation_id = filter_input(INPUT_POST, 'reservation_id');
$reservation = get_reservation_by_id($reservation_id)[0];
?>
<h2>Edit Page</h2>
<form method="post" action="edit_reservation.php">
  <label>Reservation ID:(read only)
    <input type="text" value="<?php echo $reservation['reservation_id'] ?>" name="reservation_id" readonly>
  </label>
  <br>
  <br>
  <label>Login ID
    <input type="text" class="text" value="<?php echo $reservation['login_id'] ?>" name="login_id">
  </label>
  <br>
  <br>
  <label>Room Number: 
    <input type="text" class="text" value="<?php echo $reservation['room_number'] ?>" name="room_number">
  </label>
  <br>
  <br>
  <label>From:
    <input type="text" class="text" value="<?php echo $reservation['from_date'] ?>" name="from_date">
  </label>
  <br>
  <br>
  <label>To:
    <input type="text" class="text" value="<?php echo $reservation['to_date'] ?>" name="to_date">
  </label>
  <br>
  <input type="submit" value="EDIT">
</form>

<form method="post" action="./delete_reservation.php">
  <input type="hidden" value="<?php echo $reservation['reservation_id'] ?>" name="reservation_id">
  <input type="submit" value="DELETE" onclick="return check()">
</form>

<script type="text/javascript">
function check() {
  var c = confirm("Are you sure you want to delete reservation ID: <?php echo $reservation['reservation_id'] ?> ?");
  return c;
}
</script>

