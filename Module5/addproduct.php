<?php
include './connection.php'; // Ensure the connection file is included

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stocklevel = $_POST['stock_level'];

    try {
        $query = "INSERT INTO product (name, description, price, stock_level) VALUES (:name, :description, :price, :stock_level)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock_level' => $stocklevel
        ]);

        echo "<p>Product added successfully!</p>";
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
        <label for="productname">Product Name</label>
        <input type="text" name="productname" required><br>

        <label for="description">Description</label>
        <input type="text" name="description" required><br>

        <label for="price">Price</label>
        <input type="text" name="price" required><br>

        <label for="stock_level">Stock Level</label>
        <input type="text" name="stock_level" required><br><br>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>