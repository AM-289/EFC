<?php

    include '../Includes/DBlink.php';
?>

<html>
    <body>
        <form action="" method="POST">
            <caption>Chercher un trajet</caption>
                    <label for="choose_car">Véhicule :</div>
            <select name="brand">
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>
                <option value="ford">Ford</option>
                <option value="honda">Honda</option>
                <option value="hyundai">Hyundai</option>
                <option value="mercedes">Mercedes</option>
                <option value="peugeot">Peugeot</option>
                <option value="renault">Renault</option>
                <option value="toyota">Toyota</option>
                <option value="volksvagen">Volksvagen</option>
            </select>
            <label for="energy">Sélectionner l'énergie de votre véhicule :</label>
            <select name="energy" id="energy">
                <option value="diesel">Diesel/Gazoil</option>
                <option value="electric">Electrique</option>
                <option value="gasoline">Essence</option>
                <option value="full_hybrid">Full Hybride</option>
                <option value="lpg">GPL</option>
            </select>
            <input name="str_point" type="text" placeholder="Lieu de départ">
            <input name="end_point" type="text" placeholder="Lieu d'arrivée">

            <button name="search" type="submit">Confirmer</button>
        </form>

        <?php
            if (isset($_POST['search'])) {
                $brand = $_POST['brand'];
                $energy = $_POST['energy'];
                $str_point = $_POST['str_point'];
                $end_point = $_POST['end_point'];

                $query = 'SELECT * FROM ride WHERE str_point = :str_point OR end_point = :end_point AND brand = :brand AND energy = :energy ;';
                $stmt = $pdo->prepare($query);

                $stmt->bindParam(':brand', $brand);
                $stmt->bindParam(':energy', $energy);
                $stmt->bindParam(':str_point', $str_point);
                $stmt->bindParam(':end_point', $end_point);
                $stmt->execute();
        ?>
    </body>
</html>