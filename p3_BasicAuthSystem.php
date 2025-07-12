<?php

const USERNAME = "waes";
const PASSWORD = "123456";

echo "Enter Username: ";
$user = readline();

echo "Enter Password: ";
$password = readline();

if (!empty($user) && !empty($password)) {
    if(($user === USERNAME) && ($password === PASSWORD)) {
        echo "Login in successfull.";
    } else {
        echo "These credentials do not match our records.";
    }
} else {
    if(empty($user) || empty($password)) {
        if(empty($user)) {
            echo "Username missing!";
        } 
        if (empty($user) && empty($password)) {
          echo "\n";
        }
        if (empty($password)) {
            echo "Password missing!";
        }
    } else {
        echo "Invalid Username or Password!";
    }
}