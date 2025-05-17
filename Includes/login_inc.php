<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once 'DBlink.php';
        require_once 'login_model.php';
        require_once 'login_contr.php';

        // Error Handlers
        $errors = [];

        if (is_input_empty($username, $pwd)) {
            $errors['empty_input'] = "Veuillez remplir tous les champs.";
        }
        
        $result = get_user($pdo, $username);

        if (is_username_wrong($result)) {
            $errors['login_incorrect'] = "Nom d'utilisateur ou mot de passe incorrect.";
        }

        if (!is_username_wrong($result) && is_password_wrong($pwd, $result['pwd'])) {
            $errors['login_incorrect'] = "Nom d'utilisateur ou mot de passe incorrect.";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION['errors_login'] = $errors;
            header("Location: ../PHP/login.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . '_' . $result['id'];
        session_id($sessionId);

        $_SESSION['user_id'] = $result['id']; //Id from the database
        $_SESSION['username'] = htmlspecialchars($result['username']); //Username from the database
        $_SESSION['last_regeneration'] = time(); 

        //header("Location: ../Connexion.php?login=success");
        //header('Location: ../profile-try.php');

        $pdo = null; // Close the connection
        $stmt = null; // Close the statement

        die();
        
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }

} else {
    header("Location: ../Connexion.php");
    die();
}