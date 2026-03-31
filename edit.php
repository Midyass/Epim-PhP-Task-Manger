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

    if (empty($errors)) {

        $firstName = mysqli_real_escape_string($connection, $firstName);
        $lastName  = mysqli_real_escape_string($connection, $lastName);
        $gender    = mysqli_real_escape_string($connection, $gender);
        $class     = mysqli_real_escape_string($connection, $class);
        $id        = (int)$id;

        $query = "UPDATE students 
                  SET first_name = '$firstName', 
                      last_name  = '$lastName', 
                      gender     = '$gender', 
                      class      = '$class' 
                  WHERE id = '$id'";

        if (mysqli_query($connection, $query)) {
            if (mysqli_affected_rows($connection) > 0) {
                header("Location: index.php");
                exit();
            } else {
                echo "No changes were made.";
            }
        } else {
            die("Error updating user: " . mysqli_error($connection));
        }
    }
}

?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow-lg border-0 rounded-4">

                <!-- Header -->
                <div class="card-header bg-white border-0 text-center">
                    <h4 class="fw-semibold mb-0">
                        <i class="fa-solid fa-user-pen me-2 text-primary"></i>
                        Edit User
                    </h4>
                </div>

                <!-- Form -->
                <div class="card-body px-4 py-4">
                    <form action="edit.php" method="POST">

                        <input type="hidden" name="id" value="<?= $id; ?>">

                        <div class="mb-3">
                            <label class="form-label small text-muted">First Name</label>
                            <input type="text" name="firstname"
                                class="form-control rounded-3"
                                value="<?= $firstName; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Last Name</label>
                            <input type="text" name="lastname"
                                class="form-control rounded-3"
                                value="<?= $lastName; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Gender</label>
                            <input type="text" name="gender"
                                class="form-control rounded-3"
                                value="<?= $gender; ?>">
                        </div>

                        <div class="mb-4">
                            <label class="form-label small text-muted">Class</label>
                            <input type="text" name="class"
                                class="form-control rounded-3"
                                value="<?= $class; ?>">
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">

                            <a href="index.php" class="btn btn-light rounded-pill px-4">
                                <i class="fa-solid fa-arrow-left me-1"></i> Back
                            </a>

                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                <i class="fa-solid fa-check me-1"></i> Update
                            </button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include("./includs/footer.php"); ?>