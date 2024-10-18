<?php

// Liste des armes disponibles
$weapons = ['fists', 'whip', 'gun'];

// Arme choisie aléatoirement par l'adversaire
$opponentWeapon = $weapons[rand(0, 2)];

// Initialisation de la variable qui contiendra l'arme de Stevenson
$stevensonWeapon = '';

// Logique pour choisir l'arme de Stevenson selon l'arme de l'adversaire
if ($opponentWeapon === 'fists') {
    // Si l'adversaire choisit "fists", le pistolet est meilleur
    $stevensonWeapon = 'gun';
} elseif ($opponentWeapon === 'whip') {
    // Si l'adversaire choisit "whip", le poing est meilleur
    $stevensonWeapon = 'fists';
} elseif ($opponentWeapon === 'gun') {
    // Si l'adversaire choisit "gun", le fouet est meilleur
    $stevensonWeapon = 'whip';
}

// Affiche les résultats
echo "Opponent chose: $opponentWeapon\n";
echo "Stevenson chose: $stevensonWeapon\n";

?>
