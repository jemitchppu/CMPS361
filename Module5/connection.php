<?php

    $host = 'localhost';
    $db = 'stats';  // Database name
    $user = 'postgres';  // Database user
    $pass = 'Kadpmu08';  // Ensure correct password here
    $port = '5432';  // PostgreSQL default port

    try {
        // Use $db instead of $dbname in the DSN string
        $dsn = "pgsql:host=$host;port=$port;dbname=$db";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection Failed: ' . $e->getMessage();
    }

?>