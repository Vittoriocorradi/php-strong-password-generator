<?php

// Ricevi una password dati una lunghezza e un array di caratteri da utilizzare
function randomPassword($password_length, $random_characters) {
    $password = '';
    for ($i = 0; $i < $password_length; $i++) {
        $password .= $random_characters[rand(0, count($random_characters))];
    }
    return $password;
}