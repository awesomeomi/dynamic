<?php

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$data = "User: $user\nEmail: $email\nMessage: $message\n\n";

$filename = 'user_data.txt';

if (file_put_contents($filename, $data, FILE_APPEND)) {
    echo "MESSAGE IS SENT";
} else {
    echo "Error saving data.";
}

?>