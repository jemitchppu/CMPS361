<?php
    //user credentials
    $host = "localhost";
    $port = 5432;
    $dbname = "teams";
    $user = "postgres";
    $password = "Kadpmu08";

    //Connection string
    $dsn = "pgsql:host=$host;dbname=$dbname";

    try {
        $instance = new PDO($dsn,$user,$password);

        $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Successfully Connected to the database";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


?>