<?php
    require_once 'Includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if (!isset($_SESSION['user_id'])) {?>
        <div class="login-form">
            <h1>Connexion</h1>
            <form action="Includes\login_inc.php" method="POST">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="pwd" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>
        </div>
    <?php } ?>

    <?php
    // Display login errors if any
    check_login_errors();
    ?>

</body>
</html>