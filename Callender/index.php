<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier de l'Avent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calendar-container">
        <h1>Calendrier de l'Avent</h1>
        <div class="calendar-grid">
            <?php
            // Boucle PHP pour générer les jours du calendrier
            for ($i = 1; $i <= 24; $i++) {
                echo '<div class="day">Jour  . $i . </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
