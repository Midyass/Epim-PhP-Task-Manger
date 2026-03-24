<?php

require_once("./config/database.php");


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($connection, $query)) {
        if (mysqli_affected_rows($connection) > 0) {
            header("Location:index.php");
            exit();
        } else {
            header("Location:index.php");
            exit();
        }
    } else {
        die("Error Deleting User From DB" . mysqli_error($connection));
    }
}
