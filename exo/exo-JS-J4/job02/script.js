function jsonValueKey(jsonString, key) {
    // Ajouter des guillemets autour des clés pour un format JSON valide
    const formattedJsonString = jsonString.replace(/(\w+):/g, '"$1":');
    
    try {
        // 'Parse' la chaîne JSON
        const jsonObject = JSON.parse(formattedJsonString);
        
        // Retourne la valeur liée à la clé
        return jsonObject[key] || null; // Retourne null si la clé n'existe pas
    } catch (e) {
        console.error("Erreur de parsing JSON:", e);
        return null; // Retourne null en cas d'erreur parse
    }
}

// Exemple
const jsonString = `{
    name: "La Plateforme_",
    address: "8 rue d'hozier",
    city: "Marseille",
    nb_staff: "11",
    creation: "2019"
}`;

const value = jsonValueKey(jsonString, "city");
console.log(value); 
