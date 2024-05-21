<?php
session_start();

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle login
    if (isset($_POST['login'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        // Load the XML file
        $xmlFile = 'users.xml';
        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);

            // Check if user exists and password matches
            foreach ($xml->user as $user) {
                if ((string)$user->email === $email && (string)$user->password === $password) {
                    $_SESSION['email'] = (string)$user->email;
                    header('Location: index.php');
                    exit;
                }
            }

            // If no matching user found
            $errorMessage = 'Invalid email or password!';
        } else {
            $errorMessage = 'No user data found!';
        }
    }
    // Handle signup
    elseif (isset($_POST['signup'])) {
        // Add signup logic here if necessary
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #dfdfdf;
        }
        .main-btnnn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .box {
         
            border-radius: 20px;
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 5px 10px 1px rgba(0,0,0, 0.05);
        }
        .login-box {
            padding: 30px;
            background: #d2b48c;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }
        .login-header header {
            font-size: 30px;
            font-weight: 600;
            color: #333;
            position: relative;
        }
        .input-box .input-field {
            width: 100%;
            height: 40px;
            font-size: 17px;
            padding: 0 25px;
            margin-bottom: 15px;
            border-radius: 30px;
            border: none;
            box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
            outline: none;
            transition: .3s;
        }
        .input-field:focus {
            width: 105%;
        }
        .input-submit .submit-btn {
            width: 100%;
            height: 40px;
            background: black;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s;
            color: #fff;
        }
        .input-submit .submit-btn:hover {
            background: #000;
            transform: scale(1.05, 1);
        }
        .sign-up-link {
            font-size: 15px;
            margin-top: 30px;
        }
        .sign-up-link a {
            color: #000;
            font-weight: 600;
            cursor: pointer;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <button class="main-btnnn" onclick="openLogin()">LOGIN</button>

    <div class="box" id="loginBox">
        <div class="login-box">
            <div class="login-header">
                <header>
                    <a href="#" onclick="closeLogin()">
                        <img src="back.png" style="width: 35px; height: 35px; position: absolute; top: 10px; right: 10px;">
                    </a>
                    Login
                </header>
            </div>
            <?php if (!empty($errorMessage)): ?>
                <div class="error-message"><?php echo $errorMessage; ?></div>
            <?php endif; ?>
            <form action="index.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Email" autocomplete="off" maxlength="50" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password" autocomplete="off" maxlength="50" required>
                </div>
                <div class="input-submit">
                    <button type="submit" class="submit-btn" name="login">Sign In</button>
                </div>
            </form>
            <div class="sign-up-link">
                <p>Don't have an account? <a href="#" onclick="openSignup()">Sign Up</a></p>
            </div>
        </div>
    </div>

    <div class="box" id="signupBox">
        <div class="login-box">
            <div class="login-header">
                <header>
                    <a href="#" onclick="closeSignup()">
                        <img src="back.png" style="width: 35px; height: 35px; position: absolute; top: 10px; right: 10px;">
                    </a>
                    Sign up
                </header>
            </div>
            <form action="index.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-field" name="fullname" placeholder="Fullname" autocomplete="off" maxlength="50" required>
                </div>
                <div class="input-box">
                    <input type="email" class="input-field" name="email" placeholder="Email" autocomplete="off" maxlength="50" required>
                </div>
                <div class="input-box">
                    <input type="number" class="input-field" name="age" placeholder="Age" autocomplete="off" max="99" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password" autocomplete="off" maxlength="20" required>
                </div>
                <div class="input-submit">
                    <button type="submit" class="submit-btn" name="signup">Sign Up</button>
                </div>
            </form>
            <div class="sign-up-link">
                <p>Already have an account? <a href="#" onclick="closeSignup()">Sign in</a></p>
            </div>
        </div>
    </div>

    <script>
        function openLogin() {
            document.getElementById('loginBox').style.display = 'flex';
        }

        function closeLogin() {
            document.getElementById('loginBox').style.display = 'none';
        }

        function openSignup() {
            document.getElementById('signupBox').style.display = 'flex';
            document.getElementById('loginBox').style.display = 'none';
        }

        function closeSignup() {
            document.getElementById('signupBox').style.display = 'none';
            document.getElementById('loginBox').style.display = 'flex';
        }
        

        // Restrict age input to two digits
        document.querySelector('[name="age"]').addEventListener('input', function() {
            let age = this.value;
            age = age.replace(/\D/g, '');
            if (age.length > 2) {
                age = age.slice(0, 2);
            }
            this.value = age;
        });
    </script>
</body>
</html>
