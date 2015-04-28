<?php include('../../db/room_table.php'); ?>
<header><h2>Reservations</h2></header>
<form method="post" action="./show_rooms.php">
  <label>Select a Date:</label><br>
  <label>from:</label>
  <input id="demo1" name="from" type="text" size="25"><a href="javascript:NewCal('demo1','mmddyyyy')"><img src="../../img/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
  <br>
  <label>to:</label>
  <input id="demo2" name="to" type="text" size="25"><a href="javascript:NewCal('demo2','mmddyyyy')"><img src="../../img/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
  <br>
  <select name="typeOfRoom">
  <?php $roomTypes = get_distinct_room_types(); ?>
  <?php var_dump($roomTypes); ?>
  <?php foreach($roomTypes as $type):  ?>
    <option value=<?php echo $type['type'] ?>>
      <?php echo $type['type'] ?>
    </option>
  <?php endforeach; ?>
  </select>

  <br>
  <input type="submit" class="text" value="Make a Reservation" name="">
</form>
