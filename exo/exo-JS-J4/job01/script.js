document.getElementById('button').addEventListener('click', () => {    //je récup l'id de mon button puis je fait ↓
    fetch('expression.txt')    // en sorte que quand je clique, il me sorte ce qui est écrit dans mon .txt
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur');  // mon msg d'erreur
            }
            return response.text(); // Récup du txt
        })
        .then(data => {
            console.log(data); // Affiche dans la console
        })
        .catch(error => {
            console.error('Erreur :', error);
        });
});
