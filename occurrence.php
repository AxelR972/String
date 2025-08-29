<?php
function occuurence() {
    $mot = "Je mange une pomme";
    $lettre = "a";
    return substr_count($mot, $lettre);
}
echo occuurence();

function reverse() {
    $frenchPhrase = "Je mange une pomme";
    $words = explode(" ", $frenchPhrase);
    $reversedWords = array_reverse($words);
    return implode(" ", $reversedWords);
}
echo reverse();
