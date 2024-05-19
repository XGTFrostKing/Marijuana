<?php
$response = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $password = htmlspecialchars($_POST['password']);

    // Load existing XML file or create a new one
    $xmlFile = 'users.xml';
    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0"?><login></login>');
    }

    // Add new user to XML
    $user = $xml->addChild('user');
    $user->addChild('userid', uniqid());
    $user->addChild('fullname', $fullname);
    $user->addChild('email', $email);
    $user->addChild('age', $age);
    $user->addChild('password', $password);
    $user->addChild('online', $online);


    // Save the updated XML to file
    $xml->asXML($xmlFile);

    // Set the response to JavaScript alert prompt and redirection
    $response = '<script>alert("User registered successfully!");';
    $response .= 'window.location.href = "signin.php";</script>';
}

echo $response;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #dfdfdf;
        }
        .login-box{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 440px;
            height: 480px;
            padding: 30px;
        }
        .login-header{
            text-align: center;
            margin: 20px 0 40px 0;
        }
        .login-header header{
            color: #333;
            font-size: 30px;
            font-weight: 600;
        }
        .input-box .input-field{
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
        ::placeholder{
            font-weight: 500;
            color: grey;
        }
        .input-field:focus{
            width: 105%;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
        section a{
            color: #555;
        }
        .input-submit{
            position: relative;
            margin-top: 15px;
        }
        .submit-btn{
            width: 100%;
            height: 40px;
            background: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s;
            color: #fff;
        }
        .input-submit label{
            position: absolute;
            top: 45%;
            left: 50%;
            color: #fff;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .submit-btn:hover{
            background: #000;
            transform: scale(1.05, 1);
        }
        .sign-up-link{
            text-align: center;
            font-size: 15px;
            margin-top: 30px;
        }
        .sign-up-link a{
            color: #000;
            font-weight: 600;
        }
        .box{
            background-color: rgb(241, 225, 204);
            border-radius: 20px;
            box-shadow: 2px 2px 5px 5px rgb(143, 143, 164);
             width: 400px;
            height: 600px;
        }
        .singup-login-box{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 400px;
            height: 600px;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="signup-login-box">
            <div class="login-header">
                <header>
                    <a href="signin.php">
                        <img src="back.png" style="width: 35px; height: 35px; position: absolute; top: 10; left: 600px; margin: 10px;">
                    </a>
                    Sign up
                </header>
            </div>
            <form action="signup.php" method="POST">
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
                    <button type="submit" class="submit-btn">Sign up</button>
                </div>
            </form>
            <div class="sign-up-link">
                <p>Already have an account? <a href="signin.php">Sign in</a></p>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('age').addEventListener('input', function() {
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
