<?php

require_once("./config/database.php");
include("./includs/profile/header.php");

$id = intval($_GET['id']);

$query = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($connection, $query);
$data =  mysqli_fetch_array($result);


?>

<section class="bg-light pb-5 pt-4">
    <div class="container">
        <!-- Breadcrumb -->
        <div class="row align-items-center mb-4">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-white rounded-3 shadow-sm p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3 mb-4">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 text-center">
                        <img src="<?= !empty($data['profile_img_url']) ? htmlspecialchars($data['profile_img_url']) : './assets/img/epim.png' ?>" alt="avatar" class="rounded-circle img-fluid shadow-sm mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                        <h5 class="fw-bold mb-1"><?= htmlspecialchars($data["first_name"] . " " . $data["last_name"]) ?></h5>
                        <p class="text-muted small mb-3"><?= htmlspecialchars($data["position"] ?? 'Full Stack Developer') ?></p>
                    </div>
                    <div class="p-2 border-top">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active text-start rounded-pill mb-2 px-4" id="v-pills-personal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-personal" type="button" role="tab" aria-selected="true">
                                <i class="fas fa-user-circle me-2"></i> Personal Info
                            </button>
                            <button class="nav-link text-start rounded-pill mb-2 px-4" id="v-pills-experience-tab" data-bs-toggle="pill" data-bs-target="#v-pills-experience" type="button" role="tab" aria-selected="false">
                                <i class="fas fa-briefcase me-2"></i> Experience
                            </button>
                            <button class="nav-link text-start rounded-pill mb-2 px-4" id="v-pills-education-tab" data-bs-toggle="pill" data-bs-target="#v-pills-education" type="button" role="tab" aria-selected="false">
                                <i class="fas fa-graduation-cap me-2"></i> Education
                            </button>
                            <button class="nav-link text-start rounded-pill mb-2 px-4" id="v-pills-projects-tab" data-bs-toggle="pill" data-bs-target="#v-pills-projects" type="button" role="tab" aria-selected="false">
                                <i class="fas fa-project-diagram me-2"></i> Projects
                            </button>
                            <button class="nav-link text-start rounded-pill mb-2 px-4" id="v-pills-skills-tab" data-bs-toggle="pill" data-bs-target="#v-pills-skills" type="button" role="tab" aria-selected="false">
                                <i class="fas fa-tools me-2"></i> Skills
                            </button>
                            <button class="nav-link text-start rounded-pill px-4" id="v-pills-social-tab" data-bs-toggle="pill" data-bs-target="#v-pills-social" type="button" role="tab" aria-selected="false">
                                <i class="fas fa-link me-2"></i> Contact & Social
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <!-- 1. Personal Info Tab -->
                    <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-header bg-white border-0 pt-4 pb-0 px-4">
                                <h5 class="fw-bold"><i class="fas fa-user-edit text-primary me-2"></i> Manage Personal Info</h5>
                                <p class="text-muted small">Update your basic profile and bio.</p>
                            </div>
                            <div class="card-body p-4">
                                <form action="update_user.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">First Name</label>
                                            <input type="text" class="form-control rounded-3" name="first_name" value="<?= htmlspecialchars($data['first_name'] ?? '') ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">Last Name</label>
                                            <input type="text" class="form-control rounded-3" name="last_name" value="<?= htmlspecialchars($data['last_name'] ?? '') ?>">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">Gender</label>
                                            <select class="form-select rounded-3" name="gender">
                                                <option value="male" <?= (isset($data['gender']) && $data['gender'] == 'male') ? 'selected' : '' ?>>Male</option>
                                                <option value="female" <?= (isset($data['gender']) && $data['gender'] == 'female') ? 'selected' : '' ?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold">Position</label>
                                            <input type="text" class="form-control rounded-3" name="position" value="<?= htmlspecialchars($data['position'] ?? '') ?>" placeholder="e.g. Senior Developer">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Profile Image URL</label>
                                        <input type="text" class="form-control rounded-3" name="profile_img_url" value="<?= htmlspecialchars($data['profile_img_url'] ?? '') ?>" placeholder="https://example.com/avatar.jpg">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label fw-semibold">Description / Bio</label>
                                        <textarea class="form-control rounded-3" name="user_description" rows="4" placeholder="Write a short bio..."><?= htmlspecialchars($data['user_description'] ?? '') ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm"><i class="fas fa-save me-2"></i> Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Experience Tab -->
                    <div class="tab-pane fade" id="v-pills-experience" role="tabpanel">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i> Work Experience</h5>
                                    <p class="text-muted small mb-0">Manage your employment history.</p>
                                </div>
                                <button class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm"><i class="fas fa-plus me-1"></i> Add</button>
                            </div>
                            <div class="card-body p-4">
                                <!-- Dummy Experience Card -->
                                <div class="p-3 bg-light rounded-4 position-relative border border-secondary-subtle">
                                    <div class="position-absolute top-0 end-0 p-3">
                                        <button class="btn btn-sm btn-outline-secondary rounded-circle"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-sm btn-outline-danger rounded-circle"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <h6 class="fw-bold mb-1">Senior Software Engineer <span class="text-muted fw-normal ms-2">@ Tech Corp</span></h6>
                                    <p class="text-primary small mb-2"><i class="far fa-calendar-alt me-1"></i> Jan 2020 - Present <span class="text-muted ms-2"><i class="fas fa-map-marker-alt me-1"></i> San Francisco, CA</span></p>
                                    <p class="mb-0 small text-muted">Developing highly scalable cloud applications and leading a team of 5 backend developers.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Education Tab -->
                    <div class="tab-pane fade" id="v-pills-education" role="tabpanel">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="fw-bold"><i class="fas fa-graduation-cap text-primary me-2"></i> Education</h5>
                                    <p class="text-muted small mb-0">Manage your academic background.</p>
                                </div>
                                <button class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm"><i class="fas fa-plus me-1"></i> Add</button>
                            </div>
                            <div class="card-body p-4">
                                <!-- Dummy Education Card -->
                                <div class="p-3 bg-light rounded-4 position-relative border border-secondary-subtle">
                                    <div class="position-absolute top-0 end-0 p-3">
                                        <button class="btn btn-sm btn-outline-secondary rounded-circle"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-sm btn-outline-danger rounded-circle"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <h6 class="fw-bold mb-1">BSc in Computer Science</h6>
                                    <p class="text-primary small mb-2"><i class="fas fa-university me-1"></i> MIT <span class="text-muted ms-2"><i class="far fa-calendar-alt me-1"></i> Sep 2015 - Jun 2019</span></p>
                                    <p class="mb-0 small text-muted">Focused on software engineering, data structures, and algorithms.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Projects Tab -->
                    <div class="tab-pane fade" id="v-pills-projects" role="tabpanel">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="fw-bold"><i class="fas fa-project-diagram text-primary me-2"></i> Projects</h5>
                                    <p class="text-muted small mb-0">Showcase your portfolio.</p>
                                </div>
                                <button class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm"><i class="fas fa-plus me-1"></i> Add</button>
                            </div>
                            <div class="card-body p-4">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="card h-100 border rounded-4 shadow-sm">
                                            <div class="bg-secondary rounded-top-4 d-flex align-items-center justify-content-center text-white" style="height: 150px;">
                                                <i class="fas fa-image fa-3x text-muted"></i>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fw-bold">E-Commerce Platform</h6>
                                                <p class="small text-muted mb-2">A fully functional online store.</p>
                                                <div class="mb-3">
                                                    <span class="badge bg-light text-dark border">PHP</span>
                                                    <span class="badge bg-light text-dark border">MySQL</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-sm btn-outline-primary rounded-pill px-3">Edit</button>
                                                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Skills Tab -->
                    <div class="tab-pane fade" id="v-pills-skills" role="tabpanel">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="fw-bold"><i class="fas fa-tools text-primary me-2"></i> Skills Stack</h5>
                                    <p class="text-muted small mb-0">List your technical skills by category.</p>
                                </div>
                                <button class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm"><i class="fas fa-plus me-1"></i> Add Category</button>
                            </div>
                            <div class="card-body p-4">
                                <div class="table-responsive border rounded-3">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="border-0">Category</th>
                                                <th class="border-0">Technologies</th>
                                                <th class="border-0 text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold">Frontend</td>
                                                <td>
                                                    <span class="badge bg-primary rounded-pill">HTML</span>
                                                    <span class="badge bg-primary rounded-pill">CSS</span>
                                                    <span class="badge bg-primary rounded-pill">Bootstrap 5</span>
                                                </td>
                                                <td class="text-end">
                                                    <button class="btn btn-sm btn-outline-secondary rounded-circle"><i class="fas fa-pen"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger rounded-circle"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Contact & Social Tab -->
                    <div class="tab-pane fade" id="v-pills-social" role="tabpanel">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="fw-bold"><i class="fas fa-address-book text-primary me-2"></i> Contact & Social</h5>
                                    <p class="text-muted small mb-0">Manage your contact methods.</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm"><i class="fas fa-plus me-1"></i> Contact</button>
                                    <button class="btn btn-info text-white btn-sm rounded-pill px-3 shadow-sm ms-1"><i class="fas fa-plus me-1"></i> Social</button>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h6 class="fw-bold mb-3 border-bottom pb-2">Contact Methods</h6>
                                        <ul class="list-group list-group-flush border rounded-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <div>
                                                    <i class="fas fa-envelope text-muted me-2"></i> <strong>Email</strong><br>
                                                    <small class="text-muted">john@example.com</small>
                                                </div>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle"><i class="fas fa-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="fw-bold mb-3 border-bottom pb-2">Social Links</h6>
                                        <ul class="list-group list-group-flush border rounded-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                <div>
                                                    <i class="fab fa-linkedin text-primary me-2"></i> <strong>LinkedIn</strong><br>
                                                    <small class="text-muted">linkedin.com/in/john</small>
                                                </div>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle"><i class="fas fa-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("./includs/profile/footer.php");
?>