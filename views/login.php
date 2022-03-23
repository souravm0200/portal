<!DOCTYPE html>
<html>

<head>
    <title> Portal </title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/validation.js" defer></script>
</head>

<body>

    <div class="container">
        <form class="login-form" id="login" action="../controllers/LoginCheck.php" method="post">
            <div class="heading-container">
                <h2>SCHOOL PORTAL</h2>
                <p>Sign in with your organizational username</p>
                <?php 
                    if(isset($_GET['error'])) {
                        echo '<p class="error">Wrong username or password</p>';
                    }
                ?>
            </div>
            <div class="group login-input">
                <input type="username" name="username" placeholder="User name" >
                <span id="username-error">The User Name field is required.</span>
            </div>
            <div class="group login-input">
                <input type="password" name="password" placeholder="Password" >
                <span id="password-error">The password field is required.</span>
            </div>
            <button class="loginBtn" type="submit" name="submit">Log in</button>
            <div class="group form-link">
                <a href="#">Can't access your account? </a>
            </div>
        </form>
    </div>
</body>

</html>