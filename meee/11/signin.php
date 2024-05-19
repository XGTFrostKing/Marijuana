<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="box">
    <div class="login-box">
    <?php
        include("dbconn.php");
        ?> 


        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" id="email" placeholder="Email" autocomplete="off"  maxlength="50" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" id="password" placeholder="Password" autocomplete="off" maxlength="50" required>
        </div>
        <div class="forgot">
           
           
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Sign In</label>
        </div>
        <div class="sign-up-link">
            <p>Don't have account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</div>



</body>
</html>