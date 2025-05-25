<?php
include 'connectM.php'; //  database connection file

// Query to fetch meals from the database
$query = "SELECT * FROM meals"; // Ensure this query is correct
$result = $conn->query($query);

$meals = [];

// Fetch the meals from the database
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $meals[] = $row;
    }
}

// Return meals as JSON
echo json_encode($meals);
?>
