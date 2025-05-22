<?php
    include_once '../Includes/DBlink.php';
    include_once '../Includes/dbh_class.php';
    include_once '../Includes/profileinfo_classes.php';
    include_once '../Includes/profileinfo_view.php';
    $profileInfo = new ProfileInfoView();

    
    $query = 'SELECT * FROM cars';

    try {
        $conn = new PDO($dsn, $dbusername, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        foreach ($result as $row) {
            echo "Voiture :". $row['car_id']."Modele". $row['brand'];
        }
    } catch(PDOException $e) {
        echo "Erreur". $e->getMessage();
    }

    //$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="route">
        <a href="../PHP Travel/route.php" class="button-class">Créer un nouveau trajet</a>
    </div>
    
    <div class="cars">
        <div class="cardisplay">
            <table>
                <tr>
                    <th>Model</th>
                    <th>Energie</th>
                    <th>Couleur</th>
                    <th>Places</th>
                </tr>
                <?php
                    while($row=$result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['brand']?></td>
                    <td><?php echo $row['energy']?></td>
                    <td><?php echo $row['car_color']?></td>
                    <td><?php echo $row['seats_num']?></td>
                </tr>
                <?php
                 }
                ?>
            </table>
        </div>
        <button onclick="location.href='cars.php'">Ajouter une voiture</button>
    </div>

</body>
</html>