<?php

//Control user input

declare(strict_types=1);

//Check if input is empty
function is_input_empty(string $lname,string $fname,string $username ,string $email,string $pwd) {
    if (empty($lname) || empty($fname) || empty($username) || empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

// Check if the email is valid
function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

//Check if email is registered
function is_email_registered(object $pdo, string $email){
    if (get_email($pdo, $email)){
        return true;
    } else {
        return false;
    }
}

//Check if username is unique
function is_username_taken(object $pdo, string $username) {
    if(get_username($pdo, $username)){
        return true;
    } else {
        return false;
    }
}

//
function create_user(object $pdo, string $lname, string $fname, string $username, string $email, string $pwd) {
    set_user($pdo, $lname, $fname, $username, $email, $pwd);
}

function create_role(object $pdo, $role_type) {
    set_role($pdo, $role_type);
}