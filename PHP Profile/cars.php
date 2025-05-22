<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="car-form.css">
    <title>Voiture</title>
</head>
<body>

    <form action="../Includes/car_inc.php" method="POST">
        <label for="brand">Sélectionner la marque :</label>
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
        <div class="car-color">
            <select name="car_color">
                <option id="beige" value="beige"> Beige</option>
                <option id="white" value="white">Blanc</option>
                <option id="blue" value="blue">Bleu</option>
                <option id="grey" value="grey">Gris</option>
                <option id="yellow" value="yellow">Jaune</option>
                <option id="brown" value="brown">Marron</option>
                <option id="black" value="black">Noir</option>
                <option id="orange" value="orange">Orange</option>
                <option id="red" value="red">Rouge</option>
                <option id="green" value="green">Vert</option>
                <option id="purple" value="purple">Violet</option>
                <option id="other-color" value="other">Autre</option>
            </select>
        </div>
        <input type="text" name="registration" placeholder="Plaque d'immatriculation">
        <label name="first_registration">Première date d'enregistrement de la plaque :</label>
        <label for="seats_num">Nombre de places disponibles :</label>
        <input type="number" name="seats_num" id="seats_num"> 
        <input type="date" name="first_registration">
        <button type="submit">Enregistrer la voiture</button>
    </form>
<!--
    <script src="checkcontrol.js"></script>
-->
</body>
</html>