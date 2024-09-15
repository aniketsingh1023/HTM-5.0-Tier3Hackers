<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Franchise</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for dark theme, animations, and styling -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            width: 100%;
            animation: fadeIn 1s ease-out; /* Fade in animation */
        }

        h1 {
            text-align: center;
            color: #f9a825; /* Bright yellow for contrast */
            font-size: 2rem;
            margin-bottom: 20px;
            animation: slideIn 1s ease-out; /* Heading animation */
        }

        .form-control {
            background-color: #333;
            border: none;
            border-radius: 8px;
            color: #e0e0e0;
            transition: all 0.3s ease; /* Smooth transition for focus effects */
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(249, 168, 37, 0.4); /* Yellow glow */
            border-color: #f9a825; /* Bright yellow */
        }

        .btn-primary {
            width: 100%;
            background-color: #f9a825;
            border: none;
            padding: 12px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
            color: #121212;
        }

        .btn-primary:hover {
            background-color: #c79100; /* Darker yellow on hover */
        }

        .btn {
            margin-top: 15px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #f9a825;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #c79100;
        }

        /* Keyframe animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Product</h1>
        <form action="<?php echo base_url('products/create'); ?>" method="post">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="discription">Product Address:</label>
                <textarea class="form-control" name="discription" id="discription" placeholder="Enter product address" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index">Go Back</a>
        </form>
    </div>
</body>
</html>
