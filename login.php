<!DOCTYPE html>
<html>
<head>
    <title>Login - CCS Sit-In</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="auth-page">
    <div class="auth-card">

        <div class="auth-logo">
            <img src="assets/images/logo.png" alt="Logo">
        </div>

        <h2>Welcome Back</h2>
        <p class="auth-subtitle">Login to your student account</p>

        <form action="process_login.php" method="POST">
            <div class="input-group">
                <label>ID Number</label>
                <input type="text" name="student_id" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-options">
                <label class="remember">
                    <input type="checkbox" name="remember">
                    <span>Remember Me</span>
                </label>

                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>

            <button type="submit" class="auth-btn">Login</button>
        </form>

        <p class="switch-auth">
            Don't have an account? <a href="register.php">Register</a>
        </p>

    </div>
</section>

</body>
</html>