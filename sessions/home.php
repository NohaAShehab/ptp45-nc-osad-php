<?php

//var_dump($_SESSION);

session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Our Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        .hero-section {
            height: 100vh;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            animation: fadeInUp 1.2s ease;
        }
        .btn-custom {
            background-color: #ff5e57;
            border-color: #ff5e57;
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            animation: fadeInUp 1.4s ease;
        }
        .btn-custom:hover {
            background-color: #e55039;
            border-color: #e55039;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .info-section {
            padding: 60px 20px;
            text-align: center;
        }
        .info-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #007bff;
        }
        .info-section p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
            margin-bottom: 30px;
        }
        .card-custom {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-10px);
        }
        .card-custom img {
            height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero-section">
    <h1>Welcome user <?php echo $_SESSION['name'] ?> </h1>
    <p>Your one-stop solution for modern web design and development.</p>
    <a href="#about" class="btn btn-custom">Learn More</a>
</div>

<!-- Info Section -->
<div class="info-section" id="about">
    <h2>About Us</h2>
    <p>
        We specialize in delivering top-notch web development and design solutions to help businesses grow online. Our team of experts is dedicated to creating responsive, modern, and user-friendly websites that leave a lasting impression.
    </p>
</div>

<!-- Features Section -->
<div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <img src="https://source.unsplash.com/400x300/?technology" class="card-img-top" alt="Tech Image">
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">We build high-performance websites tailored to your business needs.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card card-custom">
                <img src="https://source.unsplash.com/400x300/?design" class="card-img-top" alt="Design Image">
                <div class="card-body">
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="card-text">Creating intuitive and engaging user experiences for your brand.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card card-custom">
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
<footer class="mt-5">
    <p>&copy; 2025 Your Company. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>

