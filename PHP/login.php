<?php
    require_once '../Includes/config_session.php';
    require_once '../Includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/login-signup.css">
    <title>Connexion</title>
</head>
<body>
    
    <?php
        if (!isset($_SESSION['user_id'])) {?>
        <div class="login">
            <h1>Connexion</h1>
            <form class="login-form" action="..\Includes\login_inc.php" method="POST">
                <input type="text" name="username" placeholder="Nom d'Utilisateur" required>
                <input type="password" name="pwd" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
    <?php } ?>
            <div class="signup_link">
                <p>Pas encore de compte ?</p>
                <a href="signup.php">Créez-en un</a>
            </div>
        </div>
    <?php
    // Display login errors if any
    check_login_errors();
    ?>

    <div class="logout">
        <h2>Logout</h2>
        <form action="../Includes/logout_inc.php" method="POST">
            <button>Se déconnecter</button>
    </div>

</body>
</html>