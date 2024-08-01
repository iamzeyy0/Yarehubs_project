<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $method = $_POST['method'];

    switch ($method) {
        case 'email':
            header('Location: email_login.php');
            break;
        case 'phone':
            header('Location: phone_login.php');
            break;
        default:
            header('Location: index.html');
    }
}
?>
