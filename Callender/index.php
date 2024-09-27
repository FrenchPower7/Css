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
                for ($i = 1; $i <= 24; $i++) {
                echo "<div class='day' id='day-$i'>Jour $i</div>";
            }?>

        </div>
    </div>

    <!-- Modal pour afficher les surprises -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="message"></p>
        </div>
    </div>
<script>
        // Ajouter un gestionnaire de clic sur chaque jour
        document.querySelectorAll('.day').forEach(function(day) {
            day.addEventListener('click', function() {
                var dayNumber = this.id.split('-')[1];
                var message = "Surprise du jour " + dayNumber + " !";
                
                // Afficher le message dans la modale
                document.getElementById('message').textContent = message;
                document.getElementById('modal').style.display = 'flex';
            });
        });

        // Fermer la modale
        document.querySelector('.close').addEventListener('click', function() {
            document.getElementById('modal').style.display = 'none';
        });
    </script>
</body>
</html>
