<?php
include 'distance.php';
?>
<!DOCTYPE html>
<html lang="en" style="background: linear-gradient(to bottom, deepskyblue 0%, white 100%)">
<head>
    <meta charset="UTF-8">
    <title>GeoApp</title>

</head>
<body >
<h2>Witaj w GeoApp i oblicz odległość między dwoma dowolnymi współrzędnymi na Ziemi</h2>
<form method="POST">
    <h3>Wprowadź współrzędne pierwszego miejsca</h3>
    Szerokość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees1lat" min="0" max="90" step="1">&deg;
    <input style="width: 60px" type="number" name="minutes1lat" min="0" max="59" step="1">'
    <input style="width: 60px" type="number" name="seconds1lat" min="0" max="59" step="0.1">"
    <input type="radio" name="north_south1" value="1"/>N
    <input type="radio" name="north_south1" value="-1"/>S
    <br>
    Długość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees1long" min="0" max="180" step="1">&deg;
    <input style="width: 60px" type="number" name="minutes1long" min="0" max="59" step="1">'
    <input style="width: 60px" type="number" name="seconds1long" min="0" max="59" step="0.1">"
    <input type="radio" name="east_west1" value="-1">E
    <input type="radio" name="east_west1" value="1">W
    <br>
    <h3>Wprowadź współrzędne drugiego miejsca</h3>
    Szerokość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees2lat" min="0" max="90" step="1">&deg;
    <input style="width: 60px" type="number" name="minutes2lat" min="0" max="59" step="1">'
    <input style="width: 60px" type="number" name="seconds2lat" min="0" max="59" step="0.1">"
    <input type="radio" name="north_south2" value="1">N
    <input type="radio" name="north_south2" value="-1">S
    <br>
    Długość geograficzna:
    <br>
    <input style="width: 60px" type="number" name="degrees2long" min="0" max="180" step="1">&deg;
    <input style="width: 60px" type="number" name="minutes2long" min="0" max="59" step="1">'
    <input style="width: 60px" type="number" name="seconds2long" min="0" max="59" step="0.1">"
    <input type="radio" name="east_west2" value="-1">E
    <input type="radio" name="east_west2" value="1">W
    <br>
    <input type="submit" value="Oblicz odległość">
</form>

Odległość między wskazanymi punktami wynosi:<b>
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo getDistanceInKilometers();
        echo ' kilometrów';
    }
?>
</b>
</body>
</html>