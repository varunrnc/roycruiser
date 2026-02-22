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

    <?php // include_once('./includes/login-form.php') 
    ?>
    <section class="rc-auth-section py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-10">
                    <div class="rc-auth-wrapper">

                        <!-- LEFT SIDE -->
                        <div class="rc-auth-left">
                            <h2>Welcome to Roy Cruiser</h2>
                            <p>
                                Join our self-drive adventure community and explore the
                                world with confidence.
                            </p>
                        </div>

                        <!-- RIGHT SIDE -->
                        <div class="rc-auth-right">

                            <!-- Tabs -->
                            <div class="rc-auth-tabs">
                                <button class="rc-auth-tab active" data-auth="login">Login</button>
                                <button class="rc-auth-tab" data-auth="signup">Signup</button>
                            </div>

                            <!-- Login Form -->
                            <div class="rc-auth-form active" id="login">
                                <form>
                                    <div class="mb-3">
                                        <input type="email" class="form-control rc-auth-input" placeholder="Email">
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" class="form-control rc-auth-input" placeholder="Password">
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        
                                        <a href="#">Forgot Password?</a>
                                    </div>

                                    <button type="submit" class="rc-auth-btn w-100">
                                        Login
                                    </button>
                                </form>
                            </div>

                            <!-- Signup Form -->
                            <div class="rc-auth-form" id="signup">
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control rc-auth-input" placeholder="Full Name">
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control rc-auth-input" placeholder="Email">
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" class="form-control rc-auth-input" placeholder="Password">
                                    </div>

                                    <button type="submit" class="rc-auth-btn w-100">
                                        Create Account
                                    </button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include_once('./footer.php'); ?>

    <?php include_once('./footer-links.php'); ?>

    <script src="./js/script.js"></script>

    <script>
        

        document.addEventListener("DOMContentLoaded", function() {

            const tabs = document.querySelectorAll(".rc-auth-tab");

            if (tabs.length > 0) {

                tabs.forEach(tab => {
                    tab.addEventListener("click", function() {

                        document.querySelectorAll(".rc-auth-tab")
                            .forEach(t => t.classList.remove("active"));

                        document.querySelectorAll(".rc-auth-form")
                            .forEach(f => f.classList.remove("active"));

                        this.classList.add("active");

                        const target = document.getElementById(this.dataset.auth);
                        if (target) {
                            target.classList.add("active");
                        }

                    });
                });

            }

        });
    </script>
</body>

</html>