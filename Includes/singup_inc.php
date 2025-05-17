<?php


//Verify how the user got acess to the page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $lname = $_POST['name'];
    $fsname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    try {

        require_once 'DBlink.php';
        require_once 'signup_model.php';
        require_once 'signup_contrphp';

        // Error Handlers
            $errors = [];

            // Check if inputs are empty
            if (is_input_empty($lname, $fsname, $username, $email, $pwd)) {
                $errors['empty_input'] = 'Remplissez tous les champs.';
            }

            // Check if email is valid
            if (is_email_invalid($email)) {
                $errors['invalid_email'] = 'Email invalide.';
            }

            // Check if email is registered
            if (is_email_registered($pdo, $email)) {
                $errors['email_used'] = 'Email déjà enregistré.';
            }

            // Check if username is taken
            if (is_username_taken($pdo, $username)) {
                $errors['username_taken'] = 'Nom d\'utilisateur déjà pris.';
            }

        require_once 'config_session.php';

        if ($error){
            $_SESSION['errors_signup'] = $errors;
            header("Location: ../signup.php");
            die();
        }

        create_user($pdo, $lname, $fsname, $username, $email, $pwd);

        header("Location: ../index.php?signup=sucess");

        $pdo = null; // Close the connection
        $stmt = null; // Close the statement

        die();

    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
};