<?php
    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';

    $dsn_connection = "mysql: host=$host; dbname=$db; charset=$charset";
    
    try{
        $pdo = new PDO($dsn_connection, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>