<?php

    include_once 'Classes/dbh.classes.php';
    include_once 'Classes/profileinfo_classes.php';
    include_once 'Classes/profileinfo_view.php';
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
    <?php output_username()?>
</h3>

<p>
    <?php
        $profileInfo->fetchAbout($_SESSION['userid']);//to display the data
        $profileInfo->fetchTitle($_SESSION['userid']);

        echo $_SESSION['useruid']; //to display the data
    ?>
</p>

</body>
</html>