<?php
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

<p>Modifier profile</p>
<form action="../Includes/profile_info.php" method='POST'>
    <input type="image" value="<?php $profileInfo->fetchProfilePic($_SESSION['user_id']);?>">

    <textarea name="about"><?php $profileInfo->fetchAbout($_SESSION['user_id']); ?></textarea>
    <input type="text" name="introtitle" value="<?php $profileInfo->fetchTitle($_SESSION['user_id']); ?>">
    <textarea name="introtext"><?php $profileInfo->fetchText($_SESSION['user_id']); ?></textarea>
    <button type="submit" name="submit"></button>
</form>

</body>
</html>