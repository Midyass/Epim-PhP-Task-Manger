<?php
require_once("./config/database.php");

$firstName = "";
$lastName = "";
$gender = "";
$class = "";

$errors = [];


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $gender = $_POST["gender"];
    $class = $_POST["class"];

    if (empty($firstName)) {
        $errors[] = "First Name Is Required";
    }
    if (empty($lastName)) {
        $errors[] = "Last Name Is Required";
    }
    if (empty($gender)) {
        $errors[] = "Gender Is Required";
    }
    if (empty($class)) {
        $errors[] = "class Is Required";
    }

    if (empty($errors)) {
        $firstName = mysqli_real_escape_string($connection, $firstName);
        $lastName = mysqli_real_escape_string($connection, $lastName);
        $gender = mysqli_real_escape_string($connection, $gender);
        $class = mysqli_real_escape_string($connection, $class);

        $query = "INSERT INTO students (first_name, last_name, gender, class) values ('$firstName', '$lastName','$gender','$class')";

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
