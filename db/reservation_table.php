<?php
include('database.php');
define("TABLE_NAME_RESERVATION", "reservation_table");
function insert_reservation($room_number, $login_id, $from_date, $to_date) {
    global $db;
    echo $login_id;
    $query = 'INSERT INTO ' . TABLE_NAME_RESERVATION .  
                 ' (room_number, login_id, from_date, to_date)
              VALUES
                 (:room_number, :login_id, :from_date, :to_date)';
    $statement = $db->prepare($query);
    $statement->bindValue(':room_number', $room_number);
    $statement->bindValue(':login_id', $login_id);
    $statement->bindValue(':from_date', $from_date);
    $statement->bindValue(':to_date', $to_date);
    $statement->execute();
    $statement->closeCursor();
}
?>
