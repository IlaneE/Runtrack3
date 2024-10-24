function tri(numbers, order) {
    // Fonction de comparaison pour le tri
    const comparer = (a, b) => {
        if (order === 'asc') {
            return a - b; // Tri ascendant
        } else if (order === 'desc') {
            return b - a; // Tri descendant
        } else {
            throw new Error("L'ordre doit être 'asc' ou 'desc'.");
        }
    };

    return numbers.sort(comparer);
}

// Exemples d'utilisation
console.log(tri([5, 3, 8, 1, 2], 'asc'));  // Affiche [1, 2, 3, 5, 8]
console.log(tri([5, 3, 8, 1, 2], 'desc')); // Affiche [8, 5, 3, 2, 1]
