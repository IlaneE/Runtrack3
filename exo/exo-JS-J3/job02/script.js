const images = document.querySelectorAll('.rainbow-image');
const shuffleButton = document.getElementById('shuffle-button');
const checkButton = document.getElementById('check-button');
const resultMessage = document.getElementById('result-message');
let draggedImage = null;

// Fonction pour mélanger
function shuffleImages() {
    const container = document.getElementById('container');
    const shuffledImages = Array.from(images);
    
    shuffledImages.sort(() => Math.random() - 0.5);
    container.innerHTML = '';
    shuffledImages.forEach(img => container.appendChild(img));
}

// Fonction pour vérifier l'ordre des images
function checkOrder() {
    const correctOrder = [
        'arc1.png', 
        'arc2.png', 
        'arc3.png', 
        'arc4.png', 
        'arc5.png', 
        'arc6.png'
    ];
    const currentOrder = Array.from(document.querySelectorAll('.rainbow-image'))
        .map(img => img.src.split('images/').pop());

    if (JSON.stringify(currentOrder) === JSON.stringify(correctOrder)) {
        resultMessage.textContent = "Vous avez gagné";
        resultMessage.style.color = "green";
    } else {
        resultMessage.textContent = "Vous avez perdu";
        resultMessage.style.color = "red";
    }
}

// Glisser-déposer
images.forEach(image => {
    image.addEventListener('dragstart', () => {
        draggedImage = image;
    });

    image.addEventListener('dragover', (event) => {
        event.preventDefault();
    });

    image.addEventListener('drop', () => {
        if (draggedImage) {
            const container = document.getElementById('container');
            const siblings = Array.from(container.children);
            const currentImageIndex = siblings.indexOf(draggedImage);
            const dropImageIndex = siblings.indexOf(image);

            if (currentImageIndex > dropImageIndex) {
                container.insertBefore(draggedImage, image);
            } else {
                container.insertBefore(draggedImage, image.nextSibling);
            }
        }
    });
});

// Événements
shuffleButton.addEventListener('click', shuffleImages);
checkButton.addEventListener('click', checkOrder);
