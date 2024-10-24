const textarea = document.getElementById('keylogger');
let isMouseOver = false;

textarea.addEventListener('mouseenter', () => {
    isMouseOver = true;
});

textarea.addEventListener('mouseleave', () => {
    isMouseOver = false;
});

document.addEventListener('keydown', (event) => {
    const key = event.key;

    if (/^[a-zA-Z]$/.test(key)) {
        if (isMouseOver) {
            textarea.value += key; // Ajoute une fois
            textarea.value += key; // Ajoute deux fois
        } else {
            textarea.value += key; // Ajoute qu'une fois
        }
    }
});
