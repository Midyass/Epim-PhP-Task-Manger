<?php
require_once("./config/database.php");

$firstName = "";
$lastName = "";
$gender = "";
$position = "";
$description = "";
// $profile_img_url = "";

$errors = [];


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $position = $_POST["position"];
    $description = $_POST["user_description"];
    $gender = $_POST["gender"];



    if (empty($firstName)) {
        $errors[] = "First Name Is Required";
    }
    if (empty($lastName)) {
        $errors[] = "Last Name Is Required";
    }
    if (empty($gender)) {
        $errors[] = "Gender Is Required";
    }
    if (empty($description)) {
        $errors[] = "Description Is Required";
    }
    if (empty($position)) {
        $errors[] = "Position Is Required";
    }


    if (empty($errors)) {
        $firstName = mysqli_real_escape_string($connection, $firstName);
        $lastName = mysqli_real_escape_string($connection, $lastName);
        $gender = mysqli_real_escape_string($connection, $gender);
        $position = mysqli_real_escape_string($connection, $position);
        $description = mysqli_real_escape_string($connection, $description);

        $query = "INSERT INTO users (first_name, last_name, gender, position, user_description) values ('$firstName', '$lastName','$gender','$position','$description')";

        if (mysqli_query($connection, $query)) {
            header('Location: index.php');
            exit();
        } else {
            $errors[] = "Insertion Failed :" . mysqli_error($connection);
        }
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: index.php");
        exit();
    }
};
