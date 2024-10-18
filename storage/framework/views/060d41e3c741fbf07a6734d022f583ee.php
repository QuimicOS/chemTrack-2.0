<!-- resources/views/layouts/templateAdmin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/templateAdmin.css')); ?>">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CHEMTRACK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                </ul>

                <div class="dropdown me-3">
                    <button class="btn btn-light position-relative" type="button">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">New pickup request</a></li>
                        <li><a class="dropdown-item" href="#">Lab details edited</a></li>
                        <li><a class="dropdown-item" href="#">Chemical added</a></li>
                    </ul>
                </div>
                <span class="navbar-text me-3"><b>juan.pablo@upr.edu</b></span>
                <button class="btn btn-outline-danger">Sign Out</button>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="menu-main">
        <div class="logo">
            <b class="material-dashboard-2">CHEMTRACK UPRM</b>
        </div>
        <div class="line-divider"></div>
        <div class="menu-button-primary">
            <div class="menu-item">juan.pablo@upr.edu</div>
        </div>
        <div class="line-divider"></div>
        <div class="menu-section">
            <a href="#" class="menu-button">Search Label</a>
            <a href="#" class="menu-button">Create Label</a>
            <a href="#" class="menu-button">Edit Label</a>
            <a href="#" class="menu-button">Invalidate Label</a>
            <a href="#" class="menu-button">Pickup Request</a>
            <a href="#" class="menu-button">Invalidate Pickup Request</a>
            <a href="#" class="menu-button">Pickup Historial</a>
            <a href="#" class="menu-button">Manage Chemical</a>
            <a href="#" class="menu-button">Role Management</a>
            <a href="#" class="menu-button">Unwanted Material Summary</a>
            <a href="#" class="menu-button">Manage Laboratories</a>
            <a href="#" class="menu-button">Manage Quiz</a>
        </div>
        <div class="line-divider"></div>

        <!-- Sign Out in Sidebar -->
        <div class="sign-out">
            <button class="btn btn-outline-danger">Sign Out</button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-area container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer class="footerprimary">
        <p>© 2024 ChemTrack UPRM. All rights reserved.</p>
        <nav class="d-flex justify-content-center">
            <a href="<?php echo e(url('contact')); ?>" class="text-muted mx-3">Contact Us</a>
            <a href="<?php echo e(url('about')); ?>" class="text-muted mx-3">About Us</a>
        </nav>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\orlan_t0jk0pf\Herd\practice\resources\views/templateAdmin.blade.php ENDPATH**/ ?>