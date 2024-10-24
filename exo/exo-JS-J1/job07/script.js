function jourtravaille(date) {
    const joursFeries = [
        new Date('2024-01-01'), // Jour de l'An
        new Date('2024-04-13'), // Lundi de Pâques
        new Date('2024-05-01'), // Fête du Travail
        new Date('2024-05-08'), // Victoire 1945
        new Date('2024-05-21'), // Ascension
        new Date('2024-06-01'), // Lundi de Pentecôte
        new Date('2024-07-14'), // Fête nationale
        new Date('2024-08-15'), // Assomption
        new Date('2024-11-01'), // Toussaint
        new Date('2024-11-11'), // Armistice 1918
        new Date('2024-12-25'), // Noël
    ];

    const jour = date.getDate();
    const mois = date.getMonth() + 1; // Les mois commencent à 0
    const annee = date.getFullYear();

    // Vérifier si c'est un jour férié
    const estFerie = joursFeries.some(ferie => 
        ferie.getDate() === jour && ferie.getMonth() === date.getMonth() && ferie.getFullYear() === annee
    );

    // Vérifier si c'est un week-end
    const jourDeLaSemaine = date.getDay(); // 0 = dimanche, 6 = samedi
    if (estFerie) {
        console.log(`Le ${jour} ${mois} ${annee} est un jour férié`);
    } else if (jourDeLaSemaine === 0 || jourDeLaSemaine === 6) {
        console.log(`Non, ${jour} ${mois} ${annee} est un week-end`);
    } else {
        console.log(`Oui, ${jour} ${mois} ${annee} est un jour travaillé`);
    }
}

// Exemple d'utilisation
const date = new Date('2024-05-01');
jourtravaille(date);
