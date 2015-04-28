<?php
include('database.php');
define("TABLE_NAME_RESERVATION", "reservation_table");

function get_reservations() {
    global $db;
    $query = 'SELECT * FROM reservation_table';
    $statement = $db->prepare($query);
    $statement->execute();
    $reservations = $statement->fetchAll();
    $statement->closeCursor();
    return $reservations;
}

function get_reservation_by_id($reservation_id) {
    global $db;
    $query = 'SELECT * FROM reservation_table
              WHERE reservation_id = :reservation_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':reservation_id', $reservation_id);
    $statement->execute();
    $reservation = $statement->fetchAll();
    $statement->closeCursor();
    return $reservation;
}

function insert_reservation($room_number, $login_id, $from_date, $to_date) {
    global $db;
    // format the date to mysql format which is Y-m-d
    $date = DateTime::createFromFormat('m-d-Y', $from_date);
    $from_date = $date->format('Y-m-d');
    $date = DateTime::createFromFormat('m-d-Y', $to_date);
    $to_date = $date->format('Y-m-d');

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

function delete_reservation($reservation_id) {
    global $db;
    $query = 'DELETE FROM reservation_table
              WHERE reservation_id = :reservation_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':reservation_id', $reservation_id);
    $statement->execute();
    $statement->closeCursor();
}
?>
