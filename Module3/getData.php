<!DOCTYPE html>>
<html lang="en">
<head>
    <title>GridView</title>
    <!--Stlyesheet-->
    <link rel="stylesheet" href="./styles.css">
    <script src="./js/searchTable.js"></script>
</head>
<body>

<?php

$apiURL="http://localhost/dashboard/test/CMPS361/Module2/api.php";

//fetch the data
$response = file_get_contents($apiURL);
//Decode JSON
$data = json_decode($response, true);


//Validate if data exists
if ($data && is_array($data)){
    //pagination
    $limit = 5;
    $totalRecords = count($data);
    $totalPages = ceil($totalRecords / $limit); //calc num of pages

    //Capture the current page orset a default page
    $currentpage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    //calculate the starting index of the current page
    if ($currentpage < 1) {
        $currentpage = 1;
    } elseif ($currentpage > $totalPages) {
        $currentpage = $totalPages;
    }

    //sorting logic
    $sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'id';
    $sortOrder = isset($_GET['order']) && $_GET['order'] == 'desc' ? 'desc' : 'asc';

    //sort data based on column and oder
    usort($data, function($a, $b) use ($sortColumn, $sortOrder) {
        if ($sortOrder == 'asc') {
            return strcmp($a[$sortColumn], $b[$sortColumn]);
        } else {
            return strcmp($b[$sortColumn], $b[$sortColumn]);
        }
    });

    //calculate the starting index of the curen page
    $startIndex = ($currentpage - 1) * $limit;

    // get the subset ofdata for the current page
    $pageData = array_slice($data, $startIndex, $limit);

    //function to toggle sort order
    function toggleOrder($currentOrder) {
        return $currentOrder = 'asc' ? 'desc' : 'asc';
    }

    //search box
    echo "<div class='search-container'>";
    echo "<label for='searchInput'>Search: </label>";
    echo "<input type='text' id='searchInput' onkeyup='searchTable()' placeholder='Search'>";
    echo "</div>";


    //Build out the table
    //echo "<table border ='1' cellpadding='10'>";
    echo "<table id='dataGrid'>";
    echo "<thread>";
    echo "<tr>";
    echo "<th><a href='?page=$currentpage&sort=id&order=" . toggleOrder($sortOrder) . "'>id</a></th>";
    echo "<th><a href='?page=$currentpage&sort=teamname&order=" . toggleOrder($sortOrder) . "'>teamname</a></th>";
    echo "<th><a href='?page=$currentpage&sort=teamcity&order=" . toggleOrder($sortOrder) . "'>teamcity</a></th>";
    echo "<tr>";
    echo "<thread>";
    echo "<tbody>";

    //Loop through the data and display each post
    foreach ($pageData as $post) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars(($post['id'])) . "</td>";
        echo "<td>" . htmlspecialchars(($post['teamname'])) . "</td>";
        echo "<td>" . htmlspecialchars(($post['teamcity'])) . "</td>";
    }

    echo "</tbody>";
    echo "</table>";

    //pagination links
    echo "<div style='margin-top: 20px;'>";

    //display previous link if not on first page
    if ($currentpage > 1) {
        echo '<a href=">page=' . ($currentpage - 1) . '&sort=' . $sortColumn . '&order=' . $sortOrder . '">Previous</a> ';
    }

    //display page numbers
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentpage) {
            echo "<strong>$i</strong> ";
        } else {
            echo '<a href="?page=' . $i . '&sort=' . $sortColumn . '&order=' . $sortOrder . '">' . $i . '</a> ';
        }
    }

    //display next link if not on first page
    if ($currentpage > 1) {
        echo '<a href=">page=' . ($currentpage + 1) . '&sort=' . $sortColumn . '&order=' . $sortOrder . '">Next</a> ';
    }

    echo "</div>";

    //display total number of records at he bottom
    echo "<div style='margin-top: 20px;'>";
    echo "<strong>Total Records: $totalRecords</strong>";
    echo "</div>";

} else {
    echo "Sorry no data is available, see you tomorrow :)";
}

?>
</body>
</html>