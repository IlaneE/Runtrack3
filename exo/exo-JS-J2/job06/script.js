// Code Konami
const konamiCode = [
    'ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown',
    'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight',
    'b', 'a'
];
let index = 0;

document.addEventListener('keydown', function (event) {
    if (event.key === konamiCode[index]) {
        index++;
        if (index === konamiCode.length) {
            document.body.classList.toggle('konami-mode');
            index = 0; // Reset l'index
        }
    } else {
        index = 0; // Réinitialise si touche incorrecte
    }
});