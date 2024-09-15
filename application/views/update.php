<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Dark Theme CSS -->
    <style>
        body {
            background-color: #343a40; /* Dark background */
            color: #f8f9fa; /* Light text color */
        }
        .container {
            background-color: #495057; /* Dark container background */
            border-radius: 8px;
            padding: 20px;
        }
        .form-control {
            background-color: #6c757d; /* Darker input background */
            color: #f8f9fa; /* Light text color */
            border: 1px solid #ced4da;
        }
        .form-control:focus {
            background-color: #495057; /* Darker focus background */
            border-color: #80bdff; /* Bootstrap's blue focus border */
            color: #f8f9fa; /* Light text color */
        }
        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Hover effect */
            border-color: #004085;
        }
        .form-group label {
            color: #f8f9fa; /* Light label color */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Update Product</h1>
        <form action="<?php echo base_url('products/perform_update/' . $product['id']); ?>" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo htmlspecialchars($product['name']); ?>">
            </div>
            <div class="form-group">
                <label for="discription">Description:</label>
                <textarea class="form-control" name="discription" id="discription"><?php echo htmlspecialchars($product['discription']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
