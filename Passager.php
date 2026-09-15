<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Les informations du passager</h1>
    <form>
        <div class="line">
            <label>Nom:</label>
            <input type="text" required>
        </div>
        <div class="line">
            <label>Prénom:</label>
            <input type="text" required>
        </div>
        <div class="line">
            <label>CIN:</label>
            <input type="text" required>
        </div>    
        <div class="line">
            <label>N° téléphone:</label>
            <input type="number" required>
        </div>
        <div class="line">
            <label>E-mail:</label>
            <input type="email" required>
        </div>    
        <div class="line">
            <label>N° de compte:</label>
            <input type="number" required>
        </div>  
        <div class="button">  
            <button><a href="reservation.php" class="but">Confirmer</a></button>
        </div>
    </form>
</body>
</html>