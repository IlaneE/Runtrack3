function estPremier(n) {
    // Vérifie si un nombre est premier
    if (n <= 1) return false;
    for (let i = 2; i <= Math.sqrt(n); i++) {
        if (n % i === 0) return false;
    }
    return true;
}

function sommenombrespremiers(a, b) {
    if (estPremier(a) && estPremier(b)) {
        return a + b;
    } else {
        return false;
    }
}

// Exemples d'utilisation
console.log(sommenombrespremiers(3, 5)); // Affiche 8
console.log(sommenombrespremiers(4, 5)); // Affiche false
