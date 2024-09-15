<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Login</title>
    
    <!-- Bootstrap 5 CDN for modern layout and responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Dark theme styling */
        body {
            background-color: #121212;
            color: #e0e0e0;
            padding-top: 50px;
            font-family: 'Roboto', sans-serif;
        }

        .page-header {
            margin-bottom: 30px;
            color: #ffc107;
        }

        /* Info box styling */
        .info-box {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
        }

        .info-box h4, .info-box p {
            margin-top: 10px;
        }

        h2, h4 {
            color: #ffc107;
            text-transform: uppercase;
        }

        /* Custom button styling */
        .btn-logout {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            padding: 10px 20px;
        }

        .btn-logout:hover {
            background-color: #0056b3;
        }

        /* Profile section styling */
        .profile-details p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            margin-top: 50px;
            text-align: center;
            color: #868e96;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .info-box {
                padding: 20px;
            }

            .btn-logout {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <h1 class="page-header text-center">PERSONAL INFORMATION</h1>

        <!-- Profile Info Box -->
        <div class="row">
            <div class="col-md-6 mx-auto info-box">
                <?php
                    $user = $this->session->userdata('user');
                    if ($user):
                        $fname = isset($user['fname']) ? $user['fname'] : 'N/A';
                        $email = isset($user['email']) ? $user['email'] : 'N/A';
                ?>
                <h4 class="text-center">Profile Information</h4>

                <div class="profile-details">
                    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>

                <!-- Change Password Button -->
                <a href="<?php echo base_url('index.php/user/logout'); ?>" class="btn btn-logout mt-4">Change Password</a>

                <?php else: ?>
                    <p>No user information available.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>© 2024 CodeIgniter Login App. All Rights Reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap 5 JS (Optional for responsive behavior) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
