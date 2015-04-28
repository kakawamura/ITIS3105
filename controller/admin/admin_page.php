<?php
  session_start();
  include('../../db/reservation_table.php');
?>
<?php if (array_key_exists('is_logged_in',$_SESSION) && !empty($_SESSION['is_logged_in'])) { ?>
  <?php if ($_SESSION['is_logged_in'] == 1 && $_SESSION['login_id'] == "admin")  { ?>
    <p><?php echo "Hello, " . $_SESSION['login_id']; ?></p>
    <a href="../login/logout.php">Sign Out</a>
    
    <table>
      <tr>
        <th>Reservation ID</th>
        <th>Login ID</th>
        <th>Room Number</th>
        <th>From</th>
        <th>To</th>
        <th>Edit<th>
      </tr>
    <?php foreach(get_reservations() as $reservation): ?>
      <tr>
        <td><?php echo $reservation['reservation_id']; ?> </td>
        <td><?php echo $reservation['login_id']; ?></td>
        <td><?php echo $reservation['to_date']; ?></td>
        <td><?php echo $reservation['from_date']; ?></td>
        <td><?php echo $reservation['to_date']; ?></td>
        <td>
        <form action="./edit.php" method="post">
          <input type="hidden" value="<?php echo $reservation['reservation_id']; ?>" name="reservation_id">
          <input type="submit" value="EDIT">
        </form>
        </td>
      </tr>
    <?php endforeach; ?>
      
    </table>
  <?php } else { ?>
    <a href="../login/index.php">Log In</a>
    <a href="../register/index.php">Register</a>
  <?php } ?>
<?php } else { ?>
<?php }  ?>
