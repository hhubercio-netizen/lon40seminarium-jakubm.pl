<?php
    include("Database.php");
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="funkcje.js"></script>
    <title>Radar strona</title>
</head>
<body>
    <H1>System rejestracji RADAR</H1>
    <section id="cont1">
        <fieldset class="field">
            <legend>Dane wykroczenia</legend>
            <h2>Dane wykroczenia</h2>
            <h4>Numer rejestracji</h4> 
            <img id ="radar-foto" src="zdjecia/Screenshot 2026-05-28 at 15.04.46.png">
            <input id="rejestr_num">>
            <h4>Prędkość</h4>
            <input id="predkosc">
            <h4>Wyślij do bazy :</h4>
            <button onclick="sendData()">Submit</button>
        </fieldset>
    </section>
</body>
</html>