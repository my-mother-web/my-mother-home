<?php 

include 'connectcheckout.php';

if (isset($_POST['checkout'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $insertQuery = "INSERT INTO checkout (firstname, lastname, phone, address)
                    VALUES ('$firstname', '$lastname', '$phone', '$address')";

    if ($conn->query($insertQuery) === TRUE) {
        header("Location: checkoutdone.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
