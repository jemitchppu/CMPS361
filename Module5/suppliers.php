<?php

include 'connection.php';

// Set number of records per page
$records_per_page = 10;

// Get current page number from URL, default to page 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// Get the total number of products
$query = "SELECT COUNT(*) FROM product";
$total_result = $pdo->query($query);
$total_products = $total_result->fetchColumn();

// Calculate the total number of pages
$total_pages = ceil($total_products / $records_per_page);

// Query to fetch the products for the current page
$query = "SELECT * FROM suppliers LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':limit', $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$supplier = $stmt->fetchAll(PDO::FETCH_ASSOC);

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html>
<head>    
    <title>Supplier Info</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Supplier Info</h1>
    <button onclick="location.href='../Module4/welcome.php'">Home</button>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact Info</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supplier as $supplier): ?>
                <tr>
                    <td><?= htmlspecialchars($supplier['name']) ?></td>
                    <td><?= htmlspecialchars($supplier['contact_info']) ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=1">First</a>
            <a href="?page=<?= $page - 1 ?>">Previous</a>
        <?php endif; ?>

        <span>Page <?= $page ?> of <?= $total_pages ?></span>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?= $page + 1 ?>">Next</a>
            <a href="?page=<?= $total_pages ?>">Last</a>
        <?php endif; ?>
    </div>
</body>
</html>