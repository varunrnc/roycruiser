<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Roy Cruiser</title>
    <?php include_once('./header-links.php') ?>
    <link rel="stylesheet" href="./css/contact-us.css">
</head>

<body>
    <!-- Navigation -->
    <?php include_once('./navbar.php') ?>

    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h1>Login</h1>
            <nav class="breadcrumb-nav">
                <a href="/">Home</a>
                <span class="separator">/</span>
                <span class="current">Login</span>
            </nav>
        </div>
    </section>

    <?php include_once('./includes/login-form.php') ?>

    <!-- footer  -->
    <?php include_once('./footer.php'); ?>

    <?php include_once('./footer-links.php'); ?>

    <script src="./js/script.js"></script>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                email: document.getElementById('email').value,
                password: document.getElementById('password').value,
            };

            // Simulate form submission
            const btn = document.querySelector('.submit-btn');
            const originalText = btn.textContent;
            btn.textContent = 'Login...';
            btn.disabled = true;

            setTimeout(() => {
                btn.textContent = 'Login Success ✓';
                btn.style.background = 'var(--sage)';

                // Reset form
                document.getElementById('loginForm').reset();

                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.style.background = '';
                    btn.disabled = false;
                }, 2000);
            }, 1500);

            console.log('Form submitted:', formData);
        });
    </script>
</body>

</html>