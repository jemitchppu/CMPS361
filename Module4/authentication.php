<?php

// Start session
session_start();

// Database config
$host = 'localhost';
$db = 'stats';
$user = 'postgres';
$pass = 'Kadpmu08';  // Ensure correct password here
$port = '5432';

// Create connection to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");

// Check if connection is successful
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Get user account info from the POST request
$username = isset($_POST['username']) ? $_POST['username'] : '';  // Default to empty if not set
$password = isset($_POST['password']) ? $_POST['password'] : '';  // Default to empty if not set

// SQL Query with placeholders to prevent SQL injection
$sql = "SELECT * FROM users WHERE username = $1";
$result = pg_query_params($conn, $sql, array($username));

// Check if query executed successfully
if ($result === false) {
    die("Error executing query: " . pg_last_error());
}

if (pg_num_rows($result) > 0) {
    // Fetch the user data
    $user = pg_fetch_assoc($result);

    // Verify the password using password_verify
    if (password_verify($password, $user['password'])) {
        // If password is correct
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); // Redirect to welcome.php
        exit();  // Ensure the script stops executing after redirection
    } else {
        // Password is not correct
        echo "Invalid Password";
    }
} else {
    // No user found
    echo "Sorry, user does not exist.";
}

// Close the connection
pg_close($conn);

?>