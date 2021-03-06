
<?php
/**
function get_technicians() {
    global $db;
    $query = 'SELECT * FROM technicians';
    $statement = $db->prepare($query);
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
    return $technicians;
}

// I put a id column which auto increments and is a primary number
// so the id column will be unique which will be used to delete the technician 
function delete_technician($id) {
    global $db;
    $query = 'DELETE FROM technicians
              WHERE id= :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

function add_technician($first_name, $last_name, $email, $phone, $password) {
    global $db;
    $query = 'INSERT INTO technicians
                 (first_name, last_name, email, phone, password)
              VALUES
                 (:first_name, :last_name, :email, :phone, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}
**/
include('database.php');
function get_users() {
    global $db;
    $query = 'SELECT * FROM user_table';
    $statement = $db->prepare($query);
    $statement->execute();
    $users= $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

//get user by login id
function get_user_login($login_id, $password) {
    global $db;
    $query = 'SELECT * FROM user_table WHERE (login_id = :login_id AND password = :password)';
    //$query = 'SELECT * FROM user_table WHERE login_id = :login_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':login_id', $login_id);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user= $statement->fetchAll();
    $statement->closeCursor();
    return $user;
}
function add_user($login_id, $first_name, $last_name, $password) {
    global $db;
    $query = 'INSERT INTO user_table 
                 (login_id, first_name, last_name, password)
              VALUES
                 (:login_id, :first_name, :last_name, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':login_id', $login_id);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

?>
