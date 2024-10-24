window.addEventListener('scroll', function() {
    // Récupérer la hauteur totale du document et de la fenêtre
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPosition = window.scrollY;

    // Calculer le pourcentage de scroll
    const scrollPercentage = scrollPosition / totalHeight;

    // Définir une couleur en fonction du pourcentage de scroll
    const colorValue = Math.floor(scrollPercentage * 255);
    const footer = document.querySelector('footer');

    footer.style.backgroundColor = `rgb(${colorValue}, 128, 255)`;
});