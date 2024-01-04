<?php
    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'roo';
    $password = '';
    $charset = 'utf8mb4';

    $dsn_connection = "mysql: host=$host; dbname=$db; charset=$charset";
    
    try{
        $pdo = new PDO($dsn_connection, $user, $password);
        echo "Connected";
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }
?>