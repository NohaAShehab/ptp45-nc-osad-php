<?php
    # start session for each user hit page -->
    # info about session of user
    var_dump($_SESSION);
    session_start();
    var_dump($_SESSION);
    $_SESSION['name']="Noha";
    $_SESSION['email']="ahmed@gmail.com";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beautiful HTML Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
            border-radius: 0 0 50px 50px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        .btn-primary {
            background-color: #ff5e57;
            border-color: #ff5e57;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e55039;
            border-color: #e55039;
        }
        .feature-card {
            border-radius: 12px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 40px;
            color: #007bff;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero-section">
    <h1>Welcome to Our Website</h1>
    <p>Your one-stop solution for modern web design and development.</p>
    <a href="#features" class="btn btn-primary btn-lg">Learn More</a>
</div>

<!-- Features Section -->
<div class="container mt-5" id="features">
    <div class="row">
        <div class="col-md-4">
            <div class="card feature-card text-center p-4">
                <div class="feature-icon mb-3">🚀</div>
                <h5 class="card-title">Fast Performance</h5>
                <p class="card-text">Our platform is designed to deliver lightning-fast performance for all users.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card text-center p-4">
                <div class="feature-icon mb-3">🔒</div>
                <h5 class="card-title">Secure Platform</h5>
                <p class="card-text">We use state-of-the-art security protocols to keep your data safe and secure.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card text-center p-4">
                <div class="feature-icon mb-3">🎨</div>
                <h5 class="card-title">Beautiful Design</h5>
                <p class="card-text">Our design system ensures a clean, modern, and engaging user experience.</p>
            </div>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card feature-card">
                <img src="https://source.unsplash.com/400x300/?technology" class="card-img-top" alt="Tech Image">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">We create responsive and high-performance websites tailored to your business needs.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card feature-card">
                <img src="https://source.unsplash.com/400x300/?design" class="card-img-top" alt="Design Image">
                <div class="card-body">
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="card-text">Our expert designers craft intuitive and aesthetically pleasing user interfaces.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card feature-card">
                <img src="https://source.unsplash.com/400x300/?business" class="card-img-top" alt="Business Image">
                <div class="card-body">
                    <h5 class="card-title">Digital Marketing</h5>
                    <p class="card-text">Boost your online presence with our data-driven marketing strategies.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center py-4 mt-5 bg-light">
    <p>&copy; 2025 Your Company. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
