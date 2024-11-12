document.getElementById('filterButton').addEventListener('click', () => {
    const id = document.getElementById('id').value;
    const name = document.getElementById('name').value.toLowerCase();
    const type = document.querySelector("input[name='type']:checked").value
    
    document.getElementById('type').value;

    fetch('pokemon.json')
        .then(response => response.json())
        .then(data => {
            const filteredData = data.filter(pokemon => {
                
                console.log(pokemon.base.HP)
                return (
                    (id === '' || pokemon.id.toString() === id) &&
                    (name === '' || pokemon.name.toLowerCase().includes(name)) &&
                    (type === '' || pokemon.type[0] === type || pokemon.type[1] === type) 
                );
            });
            displayResults(filteredData);
        })
        .catch(error => console.error('Erreur:', error));
});

function displayResults(pokemons) {
    const resultsList = document.getElementById('results');
    resultsList.innerHTML = ''; // Efface les résultats précédents

    if (pokemons.length === 0) {
        resultsList.innerHTML = '<li>Aucun Pokémon trouvé.</li>';
        return;
    }

    pokemons.forEach(pokemon => {
        const li = document.createElement('li');
        li.textContent = `${pokemon.id} - ${pokemon.name} (${pokemon.type})`;
        resultsList.appendChild(li);
    });
}