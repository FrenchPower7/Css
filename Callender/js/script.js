// Générer dynamiquement les messages pour chaque jour (du 1er au 24 décembre)
const messages = [];
for (let i = 1; i <= 24; i++) {
    messages.push(`Surprise du ${i} décembre!`);
}

const days = document.querySelectorAll('.day');
const modal = document.getElementById('modal');
const messageText = document.getElementById('message');
const closeModal = document.querySelector('.close');

// Ajouter un événement à chaque jour pour afficher le message correspondant
days.forEach(day => {
    day.addEventListener('click', function() {
        const dayNumber = this.getAttribute('data-day');
        messageText.textContent = messages[dayNumber - 1];  // Afficher le message correspondant au jour
        modal.style.display = "block";
    });
});

// Fermer le modal quand on clique sur le bouton "fermer"
closeModal.addEventListener('click', function() {
    modal.style.display = "none";
});

// Fermer le modal quand on clique à l'extérieur de celui-ci
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
