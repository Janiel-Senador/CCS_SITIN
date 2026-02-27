<!DOCTYPE html>
<html>
<head>
    <title>Register - CCS Sit-In</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section class="auth-page">
    <div class="auth-card large">

        <div class="auth-logo">
            <img src="assets/images/logo.png" alt="Logo">
        </div>

        <h2>Create Account</h2>
        <p class="auth-subtitle">Student Registration Form</p>

        <form action="process_register.php" method="POST">


            <div class="input-group">
                <label>ID Number</label>
                <input type="text" name="student_id" required>
            </div>

            
            <div class="input-group">
                <select name="course" required>
                    <option value="" disabled selected>Select Course</option>
                    <option value="BSIT">Bachelor of Science in Information Technology (BSIT)</option>
                    <option value="BSCS">Bachelor of Science in Computer Science (BSCS)</option>
                </select>
            </div>

            <div class="grid-3">
                <div class="input-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" required>
                </div>

                <div class="input-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" required>
                </div>

                <div class="input-group">
                    <label>Middle Name</label>
                    <input type="text" name="middle_name">
                </div>
            </div>

            <div class="input-group">
                <label>Course Level</label>
                <select name="course_level" required>
                    <option value="">Select Level</option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                    <option>3rd Year</option>
                    <option>4th Year</option>
                </select>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Address</label>
                <input type="text" name="address" required>
            </div>

            <div class="grid-2">
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="input-group">
                    <label>Repeat Password</label>
                    <input type="password" name="repeat_password" required>
                </div>
            </div>

            <button type="submit" class="auth-btn">Create Account</button>
        </form>

        <p class="switch-auth">
            Already have an account? <a href="login.php">Login</a>
        </p>

    </div>
</section>

</body>
</html>