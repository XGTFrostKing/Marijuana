<?php
// Start the session
session_start();

// Load XML file
$accounts = simplexml_load_file('account.xml');

// Check if username and password match
$loginSuccess = false;
foreach ($accounts->account as $account) {
    if ($_POST['uname'] == $account->uname && $_POST['password'] == $account->password) {
        // Store the username in the session
        $_SESSION['uname'] = $_POST['uname'];
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
