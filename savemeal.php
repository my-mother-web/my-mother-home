<?php 
include 'connectM.php';

if(isset($_POST['save'])){
    $mealname = $_POST['mealname'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Check if the meal already exists
    $checkMealname = "SELECT * FROM meals WHERE mealname='$mealname'";
    $result = $conn->query($checkMealname);
    if($result->num_rows > 0){
        echo "Meal already exists!";
    } else {
        // Insert new meal into the database
        $insertQuery = "INSERT INTO meals (mealname, price, category, description)
                        VALUES ('$mealname', '$price', '$category', '$description')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: menu2.html");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
