<?php
    require_once '../Includes/signup_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/login-signup.css">
    <title>Créer un compte</title>
</head>
<body>
    <div class="signup">
        <h1>Créer un compte</h1>
        <form class="signup-form" action="../Includes/singup_inc.php" method="POST">
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="surname" placeholder="Prénom"> 
            <input type="text" name="username" placeholder="Nom d'utilisateur">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <button type="submit">S'inscrire</button>
    </div>

    <?php
    // Display signup errors if any
    check_signup_errors();
    ?>
</body>
</html>