<?php
session_start();

function loadOrCreateXMLFile($xmlFile) {
    if(!file_exists($xmlFile)){
        $xml = new DOMDocument('1.0');
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = true;
        $accounts = $xml->createElement('accounts');
        $xml->appendChild($accounts);
    } else {
        $xml = new DOMDocument();
        if (!$xml->load($xmlFile)) {
            die('Failed to load XML file.');
        }
    }
    return $xml;
}

function saveXMLFile($xml, $xmlFile) {
    if (!$xml->save($xmlFile)) {
        die('Failed to save XML file.');
    }
}

function generateUniqueID($xml) {
    $accounts = $xml->getElementsByTagName('login');
    $lastAccount = $accounts->item($accounts->length - 1);
    if ($lastAccount) {
        $lastID = $lastAccount->getAttribute('id');
        return $lastID + 1;
    } else {
        return 1; // Start with ID 1 if no accounts exist
    }
}

if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['passord']) ) {
    $xmlFile = 'login.xml';
    $xml = loadOrCreateXMLFile($xmlFile);

    $accounts = $xml->documentElement;

    $newAccount = $xml->createElement('login');
    $newAccountID = generateUniqueID($xml);
    $newAccount->setAttribute('id', $newAccountID);
    $accounts->appendChild($newAccount);

    $newAccount->appendChild($xml->createElement('fullname', htmlspecialchars($_POST['fullname'])));
    $newAccount->appendChild($xml->createElement('email', htmlspecialchars($_POST['email'])));
    $newAccount->appendChild($xml->createElement('age', htmlspecialchars($_POST['age'])));
    $newAccount->appendChild($xml->createElement('password', htmlspecialchars($_POST['password'])));

    saveXMLFile($xml, $xmlFile);

    $_SESSION['message'] = 'Registered successfully!';
    header('location: index.php');
    exit;
} else {
    $_SESSION['message'] = 'Fill up the form first!';
    header('location: index.php');
    exit;
}
?>
