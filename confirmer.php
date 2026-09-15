<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php 
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $nom = $_POST["nom"];?>

            <h2 class="message">
                <?php echo "Vous avez confirmer la reservation de ", $nom;}?>
            </h2>
</body>
</html>