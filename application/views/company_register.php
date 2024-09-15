<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Company</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298); /* Cool blue gradient */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            height: 90vh;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .left-section {
            width: 50%;
            background-color: #3498db;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: pulse 4s infinite ease-in-out;
        }

        .left-section h1 {
            color: #fff;
            font-size: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .right-section {
            width: 50%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            overflow-y: auto;
            padding-top: 40px; /* Add padding to make form fully visible */
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            animation: slideIn 0.8s ease;
        }

        .form-container label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-container input:focus, .form-container textarea:focus {
            border-color: #3498db;
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.4);
            outline: none;
        }

        .form-container input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container input[type="submit"]:hover {
            background-color: #2980b9;
        }

        @keyframes slideIn {
            from {
                transform: translateX(50px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                height: auto;
            }

            .left-section, .right-section {
                width: 100%;
                height: auto;
            }

            .left-section h1 {
                font-size: 28px;
            }

            .form-container {
                max-width: 100%;
            }

            .right-section {
                padding: 20px;
                padding-top: 40px; /* Maintain top padding for mobile */
                overflow-y: auto;
            }
        }

        /* Scrollbar styles */
        .right-section::-webkit-scrollbar {
            width: 8px;
        }

        .right-section::-webkit-scrollbar-thumb {
            background-color: #3498db;
            border-radius: 4px;
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="left-section">
            <h1>Register Your Company</h1>
        </div>
        <div class="right-section">
            <div class="form-container">
                <!-- Form Section -->
                <?php echo form_open('company/register_company'); ?>

                    <label for="company_name">Company Name:</label>
                    <input type="text" name="company_name" placeholder="Enter company name" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Enter your email" required>

                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" placeholder="Enter your phone number" required>

                    <label for="address">Address:</label>
                    <textarea name="address" placeholder="Enter company address"></textarea>

                    <label for="city">City:</label>
                    <input type="text" name="city" placeholder="Enter city" required>

                    <label for="state">State:</label>
                    <input type="text" name="state" placeholder="Enter state" required>

                    <label for="country">Country:</label>
                    <input type="text" name="country" placeholder="Enter country" required>

                    <label for="franchise_count">Number of Franchises:</label>
                    <input type="number" name="franchise_count" placeholder="Enter number of franchises" min="0" required>

                    <input type="submit" value="Register Company">

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</body>
</html>
