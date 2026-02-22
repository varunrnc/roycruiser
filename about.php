<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - Roy Cruiser</title>
    <?php include_once('./header-links.php') ?>
</head>

<body>
    <!-- Navigation -->
    <?php include_once('./navbar.php') ?>

    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h1>About Us</h1>
            <nav class="breadcrumb-nav">
                <a href="index.php">Home</a>
                <span class="separator">/</span>
                <span class="current">About Us</span>
            </nav>
        </div>
    </section>

    <!-- about section  -->
    <?php include_once('./includes/about.php') ?>

    <!-- meet founders section  -->
    <?php include_once('./includes/meet-founder.php') ?>
    

    <!-- why choose us  -->
    <?php include_once('./includes/why-choose-us.php') ?>

    <!-- rc-standard Section  -->
    <?php include_once('./includes/rc-standard.php') ?>

    <!-- roy promise  -->
    <?php include_once('./includes/roy-promise.php') ?>

    <!-- footer  -->
    <?php include_once('./footer.php'); ?>

    <?php include_once('./footer-links.php'); ?>

    <script src="./js/script.js"></script>
</body>

</html>