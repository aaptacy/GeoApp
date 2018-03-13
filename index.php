<?php
    include 'src/distance.php';
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%; background-size: 100%; background: linear-gradient(to bottom, deepskyblue 0%, snow 100%) no-repeat">
<head>
    <meta charset="UTF-8">
    <title>GeoApp</title>
</head>
<body style="height: 100%">
<h2>Witaj w GeoApp i oblicz odległość między dwoma dowolnymi współrzędnymi na Ziemi</h2>
<div id="dane">
<form method="POST">
    <h3>Wprowadź współrzędne pierwszego miejsca</h3>
    Szerokość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees1lat" min="0" max="90" step="1" placeholder="0">&deg;
    <input style="width: 60px" type="number" name="minutes1lat" min="0" max="59" step="1" placeholder="0">'
    <input style="width: 60px" type="number" name="seconds1lat" min="0" max="59" step="0.1" placeholder="0.0">"
    <input type="radio" name="north_south1" value="1" required/>N
    <input type="radio" name="north_south1" value="-1" required/>S
    <br>
    Długość geograficzna:
    <br>
    <input id="input" style="width: 60px" type="number" name="degrees1long" min="0" max="180" step="1" placeholder="0">&deg;
    <input style="width: 60px" type="number" name="minutes1long" min="0" max="59" step="1" placeholder="0">'
    <input style="width: 60px" type="number" name="seconds1long" min="0" max="59" step="0.1" placeholder="0.0">"
    <input type="radio" name="east_west1" value="-1" required>E
    <input type="radio" name="east_west1" value="1" required>W
    <br>
    <h3>Wprowadź współrzędne drugiego miejsca</h3>
    Szerokość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees2lat" min="0" max="90" step="1" placeholder="0">&deg;
    <input style="width: 60px" type="number" name="minutes2lat" min="0" max="59" step="1" placeholder="0">'
    <input style="width: 60px" type="number" name="seconds2lat" min="0" max="59" step="0.1" placeholder="0.0">"
    <input type="radio" name="north_south2" value="1" required>N
    <input type="radio" name="north_south2" value="-1" required>S
    <br>
    Długość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees2long" min="0" max="180" step="1" placeholder="0">&deg;
    <input style="width: 60px" type="number" name="minutes2long" min="0" max="59" step="1" placeholder="0">'
    <input style="width: 60px" type="number" name="seconds2long" min="0" max="59" step="0.1" placeholder="0.0">"
    <input type="radio" name="east_west2" value="-1" required>E
    <input type="radio" name="east_west2" value="1" required>W
    <br>
    <input type="submit" id="button" value="Oblicz odległość">
</form>
</div>
Odległość między wskazanymi punktami wynosi:
    <br>
    <b>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo getDistance().' kilometrów <br>';
            echo getDistance()*1000;
            echo ' metrów';
        }
    ?>
    </b>
</body>
</html>