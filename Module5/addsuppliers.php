<?php
include './connection.php'; // Ensure the connection file is included

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $contact_info = $_POST['contact_info'];


    try {
        $query = "INSERT INTO suppliers (name, contact_info) VALUES (:name, :contact_info)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'name' => $name,
            'contact_info' => $contact_info,
        ]);

        echo "<p>Supplier added successfully!</p>";
    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Add Product</h1>
    <button onclick="location.href='../Module4/welcome.php'">Home</button>
    <form method="post" action="">
        <label for="productname">Supplier Name</label>
        <input type="text" name="name" required><br>

        <label for="description">Contact Information</label>
        <input type="text" name="contact_info" required><br>

        <button type="submit">Add Supplier</button>
    </form>
</body>
</html>