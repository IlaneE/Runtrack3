// let compteur = 0;

// const bouton = document.getElementById('button');
// const affichageCompteur = document.getElementById('compteur');

// document.addEventListener('click', () => {
//     compteur++;
//     affichageCompteur.innerText = count++;
// });

//-------------------------------

// let count = 0

// function addone() {
//     document.getElementById('compteur').innerText = count++
// }

// document.addEventListener('DOMContentLoaded', function () {
//     document.getElementById('button').addEventListener('click', addone)
// })

//--------------------------------

let count = 0;

function addone() {
    count += 100; // Incrémente de 100
    document.getElementById('compteur').innerText = count; // Affiche la nouvelle valeur
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('button').addEventListener('click', addone);
});