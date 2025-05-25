<?php 

include 'connectR.php';

if (isset($_POST['submit'])) {
    $reviewname = $_POST['reviewname'];
    $reviewtext = $_POST['reviewtext'];

    $insertQuery = "INSERT INTO reviews (reviewname, reviewtext) VALUES ('$reviewname', '$reviewtext')";

    if ($conn->query($insertQuery) === TRUE) {
        header("Location: reviewcard.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
