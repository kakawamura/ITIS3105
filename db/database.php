<?php
    $dsn = 'mysql:host=localhost;dbname=california_db';
    $username = 'california_user';
    $password = 'password';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
