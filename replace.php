<?php
function nbChar() {
    $text = "Bonjour le Monde !";// On crée une variable avec du texte
    $replace = str_replace(' ', '', $text);// On remplace les espaces par rien
    return strlen($replace); // On retourne le nombre de caractères sans les espaces
}

//On affiche le résultat :
echo nbChar();