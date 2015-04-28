<?php
include('../../view/header.php');
include('../../db/room_table.php');
$from = filter_input(INPUT_POST, 'from');
$to = filter_input(INPUT_POST, 'to');
$typeOfRoom = filter_input(INPUT_POST, 'typeOfRoom');

$availableRooms = get_available_rooms($from, $to, $typeOfRoom);
?>
<style type="text/css">
table, th, td, tr {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
</style>
<p>
<?php echo $from ?> ~ <?php echo $to ?>
</p>
<table>
<tr>
  <td>Room Numbers</td>
  <td>Type</td>
  <td>Price</td>
  <td>Reserve</td>
</tr>
<?php foreach($availableRooms as $room): ?>
<tr>
  <td><?php echo $room['room_number'] ?></td>
  <td><?php echo $room['type'] ?></td>
  <td><?php echo $room['price'] ?></td>
  <td>
    <form action="./reserve_room.php" method="post">
      <input type="hidden" name="room_number" class="text" value="<?php echo $room['room_number'] ?>">
      <input type="hidden" name="login_id" class="text" value="<?php echo $_SESSION['login_id'] ?>">
      <input type="hidden" name="from" class="text" value="<?php echo $from ?>">
      <input type="hidden" name="to" class="text" value="<?php echo $to ?>">
      <input type="submit" class="text" value="RESERVE" name="">
    </form>
  </td>
</tr>
<?php endforeach; ?>
</table>

<?php include('../../view/footer.php'); ?>
