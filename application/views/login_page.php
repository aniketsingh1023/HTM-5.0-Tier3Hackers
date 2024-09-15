<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | CodeIgniter</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364); /* Cool dark gradient */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);
            padding: 50px;
            max-width: 450px;
            width: 100%;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-10px);
            box-shadow: 0px 25px 35px rgba(0, 0, 0, 0.25);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
            font-size: 36px;
            font-weight: 700;
            color: #2c3e50;
        }

        .login-header p {
            font-size: 18px;
            color: #7f8c8d;
        }

        .form-control {
            border-radius: 30px;
            padding: 15px;
            font-size: 16px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            border-radius: 30px;
            padding: 15px 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0px 10px 20px rgba(52, 152, 219, 0.3);
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-5px);
            box-shadow: 0px 15px 25px rgba(52, 152, 219, 0.5);
        }

        .alert {
            margin-top: 20px;
        }

        .floating-circles {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background-color: rgba(52, 152, 219, 0.3);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-circles::before {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background-color: rgba(41, 128, 185, 0.6);
            border-radius: 50%;
            top: 25px;
            left: 25px;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(20px);
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-container">
        <div class="floating-circles"></div>
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Login to continue</p>
        </div>

        <!-- Login Form -->
        <form method="POST" action="<?php echo base_url(); ?>index.php/user/login">
            <div class="form-group mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email Address" required autofocus>
            </div>
            <div class="form-group mb-4">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>

            <!-- Dropdown for Role Selection -->
            <div class="form-group mb-4">
                <select class="form-control" name="role" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="franchise_owner">Franchise Owner</option>
                    <option value="store_manager">Store Manager</option>
                </select>
            </div>

            <!-- Employee Code -->
            <div class="form-group mb-4">
                <input class="form-control" type="text" name="employee_code" placeholder="Employee Code" required>
            </div>

            <button type="submit" class="btn btn-lg btn-primary btn-block w-100">
                Login
            </button>
        </form>

        <!-- Sign Up Button -->
        <button type="button" class="btn btn-lg btn-primary btn-block w-100 mt-3" onclick="window.location.href='<?php echo base_url('company/register'); ?>'">
            Sign Up
        </button>

        <!-- Error Message -->
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger text-center mt-3">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
