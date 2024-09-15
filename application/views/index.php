<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap 5 Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <!-- FontAwesome Icons CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* Global Dark Theme */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
        }

        h1, h5 {
            color: #ffc107;
            text-transform: uppercase;
        }

        /* Custom Navbar */
        .navbar {
            background-color: #1f1f1f;
        }

        .navbar-brand {
            font-size: 1.7rem;
            display: flex;
            align-items: center;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ffc107 !important;
        }

        .navbar-nav .nav-item .nav-link {
            color: #e0e0e0;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffc107 !important;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 260px;
            background-color: #181818;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 1rem;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease-in-out;
            color: #e0e0e0;
        }

        .sidebar a {
            color: #e0e0e0;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 1.1rem;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #343a40;
            color: #ffc107;
            transform: translateX(10px);
        }

        .sidebar hr {
            background-color: #ffc107;
            margin: 1.5rem 0;
        }

        /* Sidebar icons */
        .sidebar i {
            margin-right: 10px;
        }

        /* Sidebar dropdown */
        .dropdown-menu-dark {
            background-color: #242424;
        }

        /* Product Cards */
        .product-card {
            background-color: #1f1f1f;
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
            transform: translateY(0);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
        }

        /* Add fade-up effect using AOS */
        .product-card[data-aos] {
            opacity: 0;
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        /* AOS animation when scrolling */
        .product-card[data-aos].aos-animate {
            opacity: 1;
        }

        /* Add sliding effect */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .product-card {
            animation: slideIn 0.7s ease-in-out;
        }

        /* Buttons */
        .btn-custom {
            background-color: #007bff;
            color: #e0e0e0;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        /* Additional styles for better UI */
        .main-container {
            margin-left: 270px;
        }

        .table-hover tbody tr:hover {
            background-color: #282828;
        }

        /* Scrollable Sidebar */
        .sidebar {
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #ffc107 #343a40;
        }

        .sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: #ffc107;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <i class="bi bi-box-seam"></i> CROMA
            </a>

            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                

                    <!-- Add Product -->
                    <li class="nav-item">
                        <a class="nav-link active px-3" href="<?php echo base_url('products/create'); ?>">
                            <i class="bi bi-plus-circle"></i> Add product
                        </a>
                    </li>

                    <!-- Franchise Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle px-3" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-tags"></i> Franchise
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="#">EAST Delhi</a></li>
                            <li><a class="dropdown-item" href="#">WEST Delhi</a></li>
                            <li><a class="dropdown-item" href="#">SOUTH Delhi</a></li>
                        </ul>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item">
                        <a class="nav-link active px-3" href="<?php echo base_url('products/home'); ?>">
                            <i class="bi bi-person-circle"></i> Profile
                        </a>
                    </li>

                    <!-- Search bar -->
                    <li class="nav-item">
                        <form class="d-flex ms-3">
                            <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                            <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"><i class="fas fa-chart-line"></i> Dashboard</a>
        <hr>
        <a href="<?= base_url('prediction') ?>"><i class="fas fa-chart-pie"></i> Prediction</a>
        <a href="<?= base_url('SentimentAnalysisController') ?>"><i class="fas fa-chart-bar"></i> Reviews</a>
        <a href="<?= base_url('collaboration') ?>"><i class="fas fa-chart-bar"></i> Team collaboration</a>
        <!-- <li class="nav-item dropdown"> -->
                    <a class="nav-link dropdown-toggle px-3" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-tags"></i> Sales Report
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="categoriesDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('reports/sales'); ?>">Today</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('salesreport'); ?>">Last 7 days</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('sales/monthly_sales'); ?> ?>">Last 30 days</a></li>
                    </ul>
                <!-- </li> -->
        <hr>
        <a href="<?php echo base_url('user/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main content -->
    <div class="container mt-4" style="margin-left: 270px;">
        <?php if ($this->session->flashdata('success_message')): ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
        <?php endif; ?>

        <h1 class="mb-4">All Products</h1>

        <!-- Product Table -->
        <div class="row">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4">
                        <div class="card product-card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text"><?php echo $product['discription']; ?></p>
                                <a href="<?php echo base_url('products/details/' . $product['id']); ?>" class="btn btn-custom">Details</a>
                                <a href="<?php echo base_url('products/update/' . $product['id']); ?>" class="btn btn-warning">Update</a>
                                <form action="<?php echo base_url('products/delete/' . $product['id']); ?>" method="post" style="display:inline;">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('mouseover', function () {
                const tooltip = new bootstrap.Tooltip(link);
                tooltip.show();
            });
        });
    </script>

</body>

</html>
