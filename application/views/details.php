<?php
// Define set_active function
function set_active($page) {
    // Get the current URI
    $current_uri = trim($_SERVER['REQUEST_URI'], '/');
    
    // Check if the current URI contains the given page
    if (strpos($current_uri, $page) !== false) {
        return 'active';
    }
    return '';
}

// Check if keys exist in $product array
$product_name = isset($product['name']) ? $product['name'] : 'N/A';
$company_name = isset($product['company_name']) ? $product['company_name'] : 'N/A';
$description = isset($product['description']) ? $product['description'] : 'N/A';
$price = isset($product['price']) ? $product['price'] : 'N/A';
$image = isset($product['image']) ? $product['image'] : 'N/A';
$availability = isset($product['availability']) ? $product['availability'] : 'N/A';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Dark Theme CSS -->
    <style>
        body {
            background-color: #343a40; /* Dark background */
            color: #f8f9fa; /* Light text */
        }
        .navbar {
            background-color: #212529; /* Dark navbar */
        }
        .card {
            background-color: #495057; /* Dark card background */
            color: #f8f9fa; /* Light card text */
        }
        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Hover effect */
            border-color: #004085;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Product Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo set_active('products'); ?>">
                    <a class="nav-link" href="<?php echo base_url('products/home'); ?>">Profile</a>
                </li>
                <li class="nav-item <?php echo set_active('products/create'); ?>">
                    <a class="nav-link" href="<?php echo base_url('products/create'); ?>">Add Product</a>
                </li>
                <li class="nav-item <?php echo set_active('user'); ?>">
                    <a class="nav-link" href="<?php echo base_url('user/logout'); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Product Details -->
    <div class="container mt-4">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($product_name); ?></h5>
                <p class="card-text">Company Name: <?php echo htmlspecialchars($company_name); ?></p>
                <p class="card-text">Description: <?php echo htmlspecialchars($description); ?></p>
                <p class="card-text">Price: $<?php echo htmlspecialchars($price); ?></p>
                <p class="card-text">Image: <?php echo htmlspecialchars($image); ?></p>
                <p class="card-text">Availability: <?php echo htmlspecialchars($availability); ?></p>
            
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
