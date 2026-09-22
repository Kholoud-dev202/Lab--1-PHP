<?php
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Détails de réservation</h1>
    <form action="confirmer.php" method="post">
    <div class="line">
        <label for="">Nom Passager:</label><br>
        <input type="text" name="nom">
    </div>
    <div class="line">
        <label for="">Date de voyage:</label><br>
        <input type="date">
    </div>
    <div class="line">
        <label for="">Lieu départ:</label><br>
        <input type="texte">
    </div>
    <div class="line">
        <label for="">Lieu arrivé:</label><br>
        <input type="texte">
    </div>
    <div class="line">
        <label for="">Prix unitaire:</label><br>
        <input type="number">
    </div>
    <div class="line">
        <label for="">Nombre des places:</label><br>
        <input type="number">
    </div>
    <div class="line">
        <label for="">Prix total:</label><br>
        <input type="number">
    </div>
    <div class="button">
        <button type="submit" value="ok"><a>Confirmer</a></button>
        <button><a>Modifier</a></button>
        <button><a href="">Supprimer</a></button>
        <button><a href="Passager.php">Annuler</a></button>
    </div>
    </form>

   
</body>
</html>