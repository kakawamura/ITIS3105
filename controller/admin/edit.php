<?php
include('../../db/reservation_table.php');
$reservation_id = filter_input(INPUT_POST, 'reservation_id');
echo $reservation_id;
//delete_reservation($reservation_id);
$reservation = get_reservation_by_id($reservation_id)[0];
?>
<h2>Edit Page</h2>
<label>Login ID
  <input type="text" class="text" value="<?php echo $reservation['login_id'] ?>" name="">
</label>
<br>
<br>
<label>Room Number: 
  <input type="text" class="text" value="<?php echo $reservation['room_number'] ?>" name="">
</label>
<br>
<br>
<label>From:
  <input type="text" class="text" value="<?php echo $reservation['from_date'] ?>" name="">
</label>
<br>
<br>
<label>To:
  <input type="text" class="text" value="<?php echo $reservation['to_date'] ?>" name="">
</label>
<br>
<a href="#"><button>EDIT</button></a>

<a href="#"><button>DELETE</button></a>
