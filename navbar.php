<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Preloader -->
<div id="preloader">
    <div class="loader-content">
        <img src="./images/preloader-logo.webp" alt="Logo" class="plogo">
        <div class="spinner"></div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="index.php">
            <img
                src="./images/long-logo.webp"
                alt="Roy Cruiser"
                class="logo img-fluid"
                onerror="this.style.display = 'none'" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>" href="about.php">About</a>
                </li>
                <li class="nav-item custom-dropdown">
                    <a href="#" class="nav-link dropdown-toggle-btn">
                        Fixed Departures
                        <span class="arrow">&#9662;</span>
                    </a>

                    <ul class="custom-dropdown-menu">
                        <li><a href="bengaluru-to-ladakh.php">Cross Border Expedition</a></li>
                        <li><a href="bengaluru-to-ladakh.php">Indian Expedition</a></li>
                        <li><a href="bengaluru-to-ladakh.php">Weekend Gateway</a></li>
                        <li><a href="bengaluru-to-ladakh.php">RC Exclusive</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'awards-and-achievements.php') ? 'active' : '' ?>" href="awards-and-achievements.php">Awards & Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'testimonials.php') ? 'active' : '' ?>" href="testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>