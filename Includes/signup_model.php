<?php

//signup_model.php is for the interaction with the database

declare(strict_types=1);

function get_email(object $pdo, string $email){
    $query = 'SELECT email FROM users WHERE email = :email;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);//Use the name of the column inside the database
    return $result;
}

function get_username(object $pdo, string $username) {
    $query = 'SELECT username FROM users WHERE username = :username;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);//Use the name of the column inside the database
    return $result;
}

function set_user(object $pdo, string $lname, string $fname, string $username, string $email, string $pwd,){
    $query = 'INSERT INTO users (lname, fname, username, email, pwd) VALUES (:lname, :fname, :username, :email, :pwd);';
    $stmt = $pdo->prepare($query);

    $options = ['cost' => 12];
    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT, $options);

    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pwd', $hashed_pwd);
    $stmt->execute();
}

function set_role(object $pdo, $role_type){
    $query = 'INSERT INTO roles (role_type) VALUES (:role_type);';
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':role_type', $role_type);
    $stmt->execute();
}