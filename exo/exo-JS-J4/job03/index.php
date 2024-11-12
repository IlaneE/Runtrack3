<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <h1> Jour04 - Job03 </h1>
<img class="pokedex-fond" src="images/pokedex.png"/>
    <form id="filterForm">
    <div class="id-poke">
        <label for="id">ID :</label>
        <input class="input-id" type="text" id="id" name="id"/><br>
    </div>
    <div class="name-poke">
        <label for="name">Name :</label>
        <input class="input-name" type="text" id="name" name="name"/><br>
    </div>
        
<div class="btntype">
      <center> <label class="type-title">Type :</label><br></center>
<label class="radio-mark" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="" checked>
    Tous
</label><br>
<label class="t2" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Water"/>
    Eau
</label><br>
<label class="t3" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Fire">
    Feu
</label><br>
<label class="t4" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Grass">
    Plante
</label><br>
<label class="t5" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Flying">
    Vol
</label><br>
<label class="t6" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Poison">
    Poison
</label><br>
<label class="t7" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Bug">
    Bug
</label><br>
<label class="t8" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Normal">
    Normal
</label><br>
<label class="t9" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Electric">
    Eleck
</label><br>
<label class="t10" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Dragon">
    Dragon
</label><br>
<label class="t11" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Ground">
    Sol
</label><br>
<label class="t12" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Fairy">
    Fée
</label><br>
<label class="t13" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Fighting">
    Combat
</label><br>
<label class="t14" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Psychic">
    Psy
</label><br>
<label class="t15" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Rock">
    Roche
</label><br>
<label class="t16" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Steel">
    Acier
</label><br>
<label class="t17" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Ice">
    Glace
</label><br>
<label class="t18" id="btnt">
    <input class="btnt" id="type" type="radio" name="type" value="Ghost">
    Spectre
</label><br>
<!-- on peut rajouter des éléments -->
</div>
        <input class="filtre" type="button" id="filterButton" value="Filtrer">
    </form>

    <!-- <h2>Résultats :</h2> -->
    <ul class="scrollable-list" id="results"></ul>

    <script src="script.js"></script>
</body>
</html>