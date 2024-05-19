<?php
session_start();

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
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
        .login-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 440px;
            height: 480px;
            padding: 30px;
        }
        .login-header {
            text-align: center;
            margin: 20px 0 40px 0;
        }
        .login-header header {
            color: #333;
            font-size: 30px;
            font-weight: 600;
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
        ::placeholder {
            font-weight: 500;
            color: grey;
        }
        .input-field:focus {
            width: 105%;
        }
        .input-submit {
            position: relative;
            margin-top: 15px;
        }
        .submit-btn {
            width: 100%;
            height: 40px;
            background: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s;
            color: #fff;
        }
        .input-submit label {
            position: absolute;
            top: 45%;
            left: 50%;
            color: #fff;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .submit-btn:hover {
            background: #000;
            transform: scale(1.05, 1);
        }
        .sign-up-link {
            text-align: center;
            font-size: 15px;
            margin-top: 30px;
        }
        .sign-up-link a {
            color: #000;
            font-weight: 600;
        }
        .box {
            background-color: rgb(241, 225, 204);
            border-radius: 20px;
            box-shadow: 2px 2px 5px 5px rgb(143, 143, 164);
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="login-box">
            <div class="login-header">
                <header>Login</header>
            </div>
            <?php if (!empty($errorMessage)): ?>
                <div class="error-message"><?php echo $errorMessage; ?></div>
            <?php endif; ?>
            
            <form action="login.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Email" autocomplete="off" maxlength="50" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password" autocomplete="off" maxlength="50" required>
                </div>
                <div class="input-submit">
                    <button type="submit" class="submit-btn">Sign In</button>
                </div>
            </form>
            <div class="sign-up-link">
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>
</html>
