<?php 

include 'connectC.php';

if (isset($_POST['orders'])) {
    $total = $_POST['total'];

    $insertQuery = "INSERT INTO orders (total) VALUES ('$total')";

    if ($conn->query($insertQuery) === TRUE) {
        header("Location: checkout.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
