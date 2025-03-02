<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <div class="container">
            <img src="../image/logoapp.png" alt="Logo App" class="logo-app">
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Work</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Website Creation Services With The Best Quality, Worth To Try</h1>
            <p>We provide high quality and professional website creation services for you,</p>
            <p>to make it easier for your business to appear cooler, more elegant, and more perfect.</p>

            <!-- Hero Slider -->
            <div class="hero-slider">
                <div class="slider-track">
                    <img src="../image/iklanswipe1.png" alt="Professional Website 1">
                    <img src="../image/iklanswipe2.png" alt="Professional Website 2">
                    <img src="../image/iklanswipe3.png" alt="Professional Website 3">
                    <img src="../image/iklanswipe4.png" alt="Professional Website 4">
                    <img src="../image/iklanswipe5.png" alt="Professional Website 5">
                    <img src="../image/iklanswipe6.png" alt="Professional Website 6">

                    <img src="../image/iklanswipe1.png" alt="Professional Website 1">
                    <img src="../image/iklanswipe2.png" alt="Professional Website 2">
                    <img src="../image/iklanswipe3.png" alt="Professional Website 3">
                    <img src="../image/iklanswipe4.png" alt="Professional Website 4">
                    <img src="../image/iklanswipe5.png" alt="Professional Website 5">
                    <img src="../image/iklanswipe6.png" alt="Professional Website 6">
                </div>
            </div>
        </div>
        <div class="hero-button">
                <a href="#" class="btn-get-started">Get Started</a>
            </div>
    </div>


    <!-- Extra Info Section -->
    <div class="extra-section">
        <div class="container">
            <h2>Our Profile</h2>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="bottom-section">
        <div class="container bottom-container">
            <!-- Container untuk Team Cards (KIRI) -->
            <div class="team-container">
                <div class="team-cards">
                    <div class="card">
                        <img src="../image/ikmal.png" alt="Ikmal Ali Azhari">
                        <p>Ikmal Ali Azhari</p>
                        <p>Mulawarman University</p>
                    </div>
                </div>
            </div>

            <!-- Container untuk Company Card (KANAN) -->
            <div class="company-container">
                <div class="company-card">
                    <div class="company-content">
                        <p><strong>BlinkBuy</strong> is an innovative solution for anyone who needs a professional website quickly and easily.</p>
                        <p>We understand that in today's digital era, having an attractive, functional, and responsive website is the key to winning business competition.</p>
                        <p>Therefore, we are here with advanced technology and a team of experts who are ready to help you build a high-quality website that suits your business needs.</p>
                        <p>Trust your website needs to <strong>BlinkBuy</strong>, and experience having a professional website in an instant.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
