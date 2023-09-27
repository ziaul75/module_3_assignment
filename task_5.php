<?php
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $characters = $lowercase . $uppercase . $numbers . $specialChars;
    $password = '';

    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    $remainingLength = $length - 4; 
    for ($i = 0; $i < $remainingLength; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        $password .= $randomChar;
    }
    $password = str_shuffle($password);

    echo "Generated Password: $password";
}

generatePassword(12);

?>
