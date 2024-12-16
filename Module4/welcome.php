<?php

session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <button onclick="location.href='../Module5/product.php'">View Products</button>
        <button onclick="location.href='../Module5/addproduct.php'">Add Products</button>
        <button onclick="location.href='../Module5/suppliers.php'">View Suppliers</button>
        <button onclick="location.href='../Module5/addsuppliers.php'">Add Supplier</button>
        <a href="logout.php">Logout</a>
    </body>
</html>