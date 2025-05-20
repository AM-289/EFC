<?php

    include_once '../Includes/dbh_class.php';
    include_once '../Includes/profileinfo_classes.php';
    include_once '../Includes/profileinfo_view.php';
    $profileInfo = new ProfileInfoView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>About</h3>

<h3>
 Bienvenu
</h3>

<!--<p>
    <?php

    //include_once('../HTML/logout.php');
    /*
        $profileInfo->fetchAbout($_SESSION['userid']);//to display the data
        $profileInfo->fetchTitle($_SESSION['userid']);

        echo $_SESSION['useruid']; //to display the data*/
    ?>
</p>-->
        <div class="logout">
        <h2>Logout</h2>
        <form action="../Includes/logout_inc.php" method="POST">
            <button>Se déconnecter</button>
    </div>

</body>
</html>