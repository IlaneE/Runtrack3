function removeBlur() {
    const textElement = document.getElementById('blurText');
    textElement.classList.toggle('no-blur'); // Basculer la classe 'no-blur' pour enlever ou ajouter le flou
}

function disparaitre() {
    var buttonflou = document.getElementById('mon-bouton');
    buttonflou.classList.add('disparu');
}

// BOUTON TROLL 

//premier

function disparaitre1() {
    var bouton1 = document.getElementById('mon-bouton1');
    bouton1.style.opacity = '0';
    setTimeout(function() {
      bouton1.style.display = 'none';
    }, 300);
  }

//deuxieme

function disparaitre2() {
    var bouton2 = document.getElementById('mon-bouton2');
    bouton2.style.opacity = '0';
    setTimeout(function() {
      bouton2.style.display = 'none';
    }, 300);
  }

//troixieme

function disparaitre3() {
    var bouton3 = document.getElementById('mon-bouton3');
    bouton3.style.opacity = '0';
    setTimeout(function() {
      bouton3.style.display = 'none';
    }, 300);
  }

//___________________________________________

//______barre de chargement + popup__________

let progressBar = document.getElementById('progress-bar');
let startButton = document.getElementById('start-progress');
let resetButton = document.getElementById('reset-progress');
let valueNow = 0;  // La barre commence à 0%
let interval;

// Démarrer la progression
startButton.addEventListener('click', function() {
    if (interval) {
        clearInterval(interval); // Si une animation est en cours, on l'arrête avant de recommencer
    }
    
    interval = setInterval(function() {
        if (valueNow >= 100) {
            clearInterval(interval);  // Arrêter la progression lorsque la barre atteint 100%
            
            // Afficher la modal lorsque la barre atteint 100%
            $('#completionModal').modal('show');
        } else {
            valueNow += 1;  // On augmente de 10% à chaque intervalle
            progressBar.style.width = valueNow + '%';
            progressBar.setAttribute('aria-valuenow', valueNow);
            progressBar.textContent = 'Chargement : ' + valueNow + '%';
        }
    }, 100); // temps que met le pourcentage à avancer (exemple : 1000 = 1sec)
});

// Réinitialiser la barre de progression
resetButton.addEventListener('click', function() {
    if (interval) {
        clearInterval(interval); // On arrête l'intervalle si la progression est en cours
    }
    valueNow = 0;  // Réinitialiser la valeur à 0%
    progressBar.style.width = '0%';
    progressBar.setAttribute('aria-valuenow', 0);
    progressBar.textContent = 'Une barre de chargement';
});

//___________________________________________

//_________list group T______________________


let listItems = document.querySelectorAll('.list-group-item');
let list = document.getElementById('list'); // Accéder à la liste pour ajouter un élément

// Tableau pour suivre les indices des éléments cliqués dans l'ordre
let selectedItems = [];

// Ajouter un gestionnaire d'événements pour chaque élément de la liste
listItems.forEach(function(item, index) {
    item.addEventListener('click', function() {
        // Toujours afficher la popup correspondant à l'élément sélectionné, indépendamment de l'ordre
        if (index === 0) {
            $('#modal1').modal('show'); // Premier élément
        } else if (index === 1) {
            $('#modal2').modal('show'); // Deuxième élément
        } else if (index === 2) {
            $('#modal3').modal('show'); // Troisième élément
        } else if (index === 3) {
            $('#modal4').modal('show'); // Quatrième élément
        } else if (index === 4) {
            $('#modal5').modal('show'); // Cinquième élément
        }

        // Vérification du bon ordre pour l'ajout du sixième élément
        if (selectedItems.length === 0 && index === 4) {
            selectedItems.push(index);
        } else if (selectedItems.length === 1 && index === 0) {
            selectedItems.push(index);
        } else if (selectedItems.length === 2 && index === 2) {
            selectedItems.push(index);

            // Ajouter le sixième élément
            setTimeout(function() {
                let newItem = document.createElement('li');
                newItem.classList.add('list-group-item');
                newItem.textContent = 'TOP Secret';
                list.appendChild(newItem); // Ajouter l'élément à la liste
                newItem.addEventListener('click', function() {
                    $('#modal6').modal('show');
                });
            }, 1000);
        } else if (selectedItems.length >= 3) {
            alert('Ordre incorrect, réinitialisation...');
            selectedItems = [];
        }
    });
});

//----------------------

// Récupération des éléments
const btn = document.getElementById('btnuntruc');
const popup = document.getElementById('popup');
const closePopup = document.getElementById('closePopup');
const confirmBtn = document.getElementById('confirmBtn');
const cancelBtn = document.getElementById('cancelBtn');

// Ouvrir la pop-up
btn.addEventListener('click', function(event) {
  event.preventDefault();  // Empêcher l'action par défaut du lien
  popup.style.display = 'flex';  // Afficher la pop-up
});

// Fermer la pop-up
closePopup.addEventListener('click', function() {
  popup.style.display = 'none';
});

// Si l'utilisateur confirme
confirmBtn.addEventListener('click', function() {
  alert("Commande confirmée !");
  popup.style.display = 'none';  // Fermer la pop-up
});

// Si l'utilisateur annule
cancelBtn.addEventListener('click', function() {
  popup.style.display = 'none';  // Fermer la pop-up
});


//----------------------

//_________________________________________

 // Liste de citations de Blade Runner
 const quotes = [
    "Je crois que... non en fait rien..",
    "2+2=22",
    "Blah blah blah",
    "0+0 = La tête à toto",
    "à l'aide...."
];

// Contenus pour la pagination
const paginationContent = [
    "La supremacie",
    "La subordination",
    "la flemme"
];

// Fonction pour "Rebooter le Monde" avec une citation aléatoire
function rebootWorld() {
    // Affiche l'animation de chargement
    const spinner = document.getElementById("spinner");
    spinner.style.display = "inline-block";

    // Changer de texte après un léger délai pour simuler le chargement
    setTimeout(() => {
        // Sélectionner une citation aléatoire
        const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
        
        // Modifier le texte du jumbotron
        document.getElementById("jumbotron").innerText = randomQuote;
        
        // Masquer l'animation de chargement
        spinner.style.display = "none";
    }, 1000); // Délai de 1 seconde pour l'effet de chargement
}

// Fonction pour changer le contenu du jumbotron avec la pagination
function changeContent(pageNumber) {
    const content = paginationContent[pageNumber - 1];
    document.getElementById("jumbotron").innerText = content;
}

//______________________________________________

// Initialisation des variables pour suivre la séquence des touches
let keySequence = [];

// Fonction pour vérifier si la séquence correcte a été entrée
function checkSequence() {
    const sequence = ['d', 'g', 'c'];  // La séquence de touches attendue
    if (keySequence.join('') === sequence.join('')) {
        afficherModale();
        keySequence = []; // Réinitialise la séquence après affichage
    } else if (keySequence.length >= sequence.length) {
        keySequence.shift(); // Garde les derniers caractères seulement
    }
}

// Fonction pour afficher la modale
function afficherModale() {
    alert("Modale affichée !");
    // Ici, vous pourriez utiliser du code pour afficher une modale plus sophistiquée, comme Bootstrap
    // ou une modale personnalisée avec CSS et JavaScript
}

// Écouteur d'événements pour les touches
document.addEventListener('keydown', (event) => {
    const key = event.key.toLowerCase();
    if (['d', 'g', 'c'].includes(key)) { // Vérifie que la touche est attendue
        keySequence.push(key);
        checkSequence();
    }
});


//_____________________________________________________

// Fonction de validation du formulaire et changement de couleur du spinner
function validateForm() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (email && password) { // Si les deux champs sont remplis
        changeSpinnerColor(); // Changer la couleur du spinner
    } else {
        alert("Veuillez remplir l'email et le mot de passe.");
    }
}

// Fonction pour changer la couleur du spinner aléatoirement
function changeSpinnerColor() {
    const spinner = document.getElementById("spinner");
    const randomColor = `#${Math.floor(Math.random()*16777215).toString(16)}`; // Couleur aléatoire hexadécimale
    spinner.style.borderTopColor = randomColor; // Appliquer la couleur au spinner
}

//________________________________________