<?php

include("./includs/header.php");
require_once('./config/database.php');

$firstName =  " ";
$lastName = " ";
$gender = " ";
$class = " ";

// Get Request

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = intval($_GET['id']);
    $query = mysqli_query($connection, "SELECT * FROM students WHERE id = $id");
    $result =  mysqli_fetch_array($query);

    $firstName = $result['first_name'] ?? " ";
    $lastName = $result['last_name'] ?? " ";
    $gender = $result['gender'] ?? " ";
    $class = $result['class'] ?? " ";
}

// POST Request

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $gender = $_POST["gender"];
    $class = $_POST["class"];
    $id = $_POST["id"];

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

    $query = "UPDATE students SET first_name =  '$firstName', last_name = '$lastName', gender = '$gender', class = '$class' WHERE id = '$id'";

    if (mysqli_query($connection, $query)) {
        if (mysqli_affected_rows($connection) > 0) {
            header("Location: index.php");
            exit();
        } else {
            echo "Matra walo";
        }
    } else {
        die("Error editing user form DB" . mysqli_error($connection));
    }
}

?>

<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php $id; ?>">
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?= $firstName; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control" value="<?= $lastName ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Gender</label>
        <input type="text" name="gender" class="form-control" value="<?= $gender ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Class</label>
        <input type="text" name="class" class="form-control" value="<?= $class ?>">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<?php include("./includs/footer.php"); ?>