<?php
// Start the session
session_start();

// Load XML file
$accounts = simplexml_load_file('login.xml');

// Check if username and password match
$loginSuccess = false;
foreach ($accounts->signup as $signup) {
    if ($_POST['email'] == $signup->email && $_POST['password'] == $signup->password) {
        // Store the username in the session
        $_SESSION['email'] = $_POST['email'];
        $loginSuccess = true;
        break;
    }
}

if ($loginSuccess) {
    // Redirect to userindex.php
    header("Location: userindex.php");
    exit;
} else {
    // Show error message and redirect back to login page
    echo '<script>alert("Invalid username or password."); window.location.href = "index.php";</script>';
    exit;
}
?>

