<?php 

$carte = $_GET ["button_id"];

$carte = range(1,8);

shuffle($carte);

$carte = isset($_GET["button_id"]) ? $_GET["button_id"] : null;
$message = '';


if ($carte == 1) {
  $message = '<style>#disp { opacity:0%; } </style>
        <button type="submit" class="button" name="button_id" value="1"><div class="carte1"><img class="cas" src="images/dragibus1.png"/></div></button>';
}
if ($carte == 2) {
    $message = '<style>#disp1 { opacity:0%; } </style>
        <button type="submit" class="button1" name="button_id" value="2"><div class="carte2"><img class="cas1" src="images/dragibus1.png"/></div></button>';
}
if  ($carte == 3) {
  $message = '<style>#disp2 { opacity:0%; } </style>
        <button type="submit" class="button2" name="button_id" value="3"><div class="carte3"><img class="cas2" src="images/ourson1.png"/></div></button>';
}
if ($carte == 4) {
    $message = '<style>#disp3 { opacity:0%; } </style>
        <button type="submit" class="button3" name="button_id" value="4"><div class="carte4"><img class="cas3" src="images/ourson1.png"/></div></button>';
}
if ($carte == 5) {
    $message = '<style>#disp4 { opacity:0%; } </style>
        <button type="submit" class="button4" name="button_id" value="5"><div class="carte5"><img class="cas4" src="images/fizz1.png"/></div></button>';
}
if  ($carte == 6) {
    $message = '<style>#disp5 { opacity:0%; } </style>
        <button type="submit" class="button5" name="button_id" value="6"><div class="carte6"><img class="cas5" src="images/fizz1.png"/></div></button>';
}
if ($carte == 7) {
    $message = '<style>#disp6 { opacity:0%; } </style>
        <button type="submit" class="button6" name="button_id" value="7"><div class="carte7"><img class="cas6" src="images/tete1.png"/></div></button>';
}
if  ($carte == 8) {
    $message = '<style>#disp7 { opacity:0%; } </style>
        <button type="submit" class="button7" name="button_id" value="8"><div class="carte8"><img class="cas7" src="images/tete1.png"/></div></button>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carte.css"/>
</head>
<body>

<h1> <?=$message; ?></h1>

<form method="get" action="" class="plat">

<button type="submit" class="button" id="disp" name="button_id" value="1"><div class="carte1"><img class="cas" src="images/cas.png"/></div></button>

<button type="submit" class="button1" id="disp1" name="button_id" value="2"><div class="carte2"><img class="cas1" src="images/cas.png"/></div></button>

<button type="submit" class="button2" id="disp2" name="button_id" value="3"><div class="carte3"><img class="cas2" src="images/cas.png"/></div></button>

<button type="submit" class="button3" id="disp3" name="button_id" value="4"><div class="carte4"><img class="cas3" src="images/cas.png"/></div></button>

<button type="submit" class="button4" id="disp4" name="button_id" value="5"><div class="carte5"><img class="cas4" src="images/cas.png"/></div></button>

<button type="submit" class="button5" id="disp5" name="button_id" value="6"><div class="carte6"><img class="cas5" src="images/cas.png"/></div></button>

<button type="submit" class="button6" id="disp6" name="button_id" value="7"><div class="carte7"><img class="cas6" src="images/cas.png"/></div></button>

<button type="submit" class="button7" id="disp7" name="button_id" value="8"><div class="carte8"><img class="cas7" src="images/cas.png"/></div></button>

</form>
</body>
</html>