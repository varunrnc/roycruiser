<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Roy Cruiser</title>
    <?php include_once('./header-links.php') ?>
    <link rel="stylesheet" href="./css/contact-us.css">
</head>

<body>
    <!-- Navigation -->
    <?php include_once('./navbar.php') ?>

    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h1>Contact Us</h1>
            <nav class="breadcrumb-nav">
                <a href="/">Home</a>
                <span class="separator">/</span>
                <span class="current">Contact Us</span>
            </nav>
        </div>
    </section>

    <?php include_once('./includes/contact-form.php') ?>

    <!-- footer  -->
    <?php include_once('./footer.php'); ?>

    <?php include_once('./footer-links.php'); ?>

    <script src="./js/script.js"></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            // Simulate form submission
            const btn = document.querySelector('.submit-btn');
            const originalText = btn.textContent;
            btn.textContent = 'Sending...';
            btn.disabled = true;

            setTimeout(() => {
                btn.textContent = 'Message Sent ✓';
                btn.style.background = 'var(--sage)';

                // Reset form
                document.getElementById('contactForm').reset();

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