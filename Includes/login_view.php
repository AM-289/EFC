<?php

declare(strict_types=1);
// Show infos inside the website
/*
function output_username() {
    if (isset($_SESSION['user_id'])) {
        echo 'Vous êtes connecté en tant que : ' . $_SESSION['username'];
    } else {
        echo 'Vous n\'êtes pas connecté.';
    }
}*/

function check_login_errors() {
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    } else if (isset($_GET['login']) && $_GET['login'] === 'success') {
        echo '<p class="form-success">Connexion réussie !</p>';
    }
}