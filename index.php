<?php
session_start();
include("./create.php");
include("./delete.php");
include("./includs/header.php");
require_once("./config/database.php");

$query = "SELECT * FROM students";
$result = mysqli_query($connection, $query);
$students_number = mysqli_num_rows($result);
$students = mysqli_fetch_all($result, mode: MYSQLI_ASSOC);


$errors = [];
if (!empty($_SESSION["errors"])) {
    $errors = $_SESSION["errors"];
    unset($_SESSION["errors"]);
}

?>

<div class="container py-5">
    <div class="card  border-0 rounded-4">
        <div class="card-header bg-white d-flex justify-content-between align-items-center border-0">
            <h4 class="mb-0 fw-semibold">User Management</h4>
            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="fa-solid fa-user-plus me-2"></i> Add User
            </button>
        </div>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger m-3 rounded-3">
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th>#</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (empty($students)): ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <i class="fa-solid fa-database fa-2x mb-2"></i><br>
                                    No users found
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($students as $value): ?>
                                <tr class="text-center">
                                    <td><?= $value['id']; ?></td>
                                    <td><?= $value['first_name'] ?></td>
                                    <td><?= $value['last_name'] ?></td>
                                    <td><?= $value['gender'] ?></td>
                                    <td><?= $value['class'] ?></td>

                                    <td>
                                        <div class="d-flex justify-content-center gap-2">

                                            <a href="profile.php?id=<?= $value['id'] ?>"
                                                class="btn btn-light btn-sm rounded-circle shadow-sm">
                                                <i class="fa-solid fa-user text-secondary"></i>
                                            </a>

                                            <a href="edit.php?id=<?= $value['id'] ?>"
                                                class="btn btn-light btn-sm rounded-circle shadow-sm">
                                                <i class="fa-solid fa-pen text-primary"></i>
                                            </a>

                                            <a href="delete.php?id=<?= $value['id'] ?>"
                                                class="btn btn-light btn-sm rounded-circle shadow-sm">
                                                <i class="fa-solid fa-trash text-danger"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">

                <div class="modal-header border-0">
                    <h5 class="modal-title fw-semibold">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="create.php" method="POST">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label small text-muted">First Name</label>
                            <input type="text" name="firstname" class="form-control rounded-3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Last Name</label>
                            <input type="text" name="lastname" class="form-control rounded-3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Gender</label>
                            <input type="text" name="gender" class="form-control rounded-3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small text-muted">Class</label>
                            <input type="text" name="class" class="form-control rounded-3">
                        </div>

                    </div>

                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            Save
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
<?php include("./includs/footer.php"); ?>