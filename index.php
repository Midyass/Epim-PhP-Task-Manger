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

<div class="container mt-5">
    <div class="row justify-content-center">
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="d-flex justify-content-between mb-3">
            <h3>User List</h3>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                Add New User
            </button>
        </div>

        <div class="table-responsive p-3 mb-5 bg-white shadow-sm rounded">
            <table class="table table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>gender</th>
                        <th>class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($students)): ?>
                        <tr>
                            <td colspan="5">No Data</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($students as $key => $value): ?>
                            <tr>
                                <td><?= +1; ?></td>
                                <td><?= $value['first_name'] ?></td>
                                <td><?= $value['last_name'] ?></td>
                                <td><?= $value['gender'] ?></td>
                                <td><?= $value['class'] ?></td>
                                <td>
                                    <form action="index.php?action=delete" method="POST" style="display:inline;">
                                        <input type="hidden" name="user_index" value="<?= $key; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <form action="create.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <input type="text" name="gender" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Class</label>
                                <input type="text" name="class" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include("./includs/footer.php"); ?>