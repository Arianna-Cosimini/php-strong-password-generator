<?php

$userChoice = isset($_GET['userChoice']) ? $_GET['userChoice'] : null;

$password = '';

function getGeneratePassword($length)
{
    $randomPassword = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ123456789./!*_';
    $password = '';
    $passwordLength = strlen($randomPassword) - 1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $randomPassword[rand(0, $passwordLength)];
    }
    return $password;
}

if ($userChoice) {
    $password = getGeneratePassword($userChoice);
}

?>