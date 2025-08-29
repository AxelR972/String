<?php
function occuurence() {
    $mot = "Je mange une pomme";
    $lettre = "e";
    return substr_count($mot, $lettre);
}
echo occuurence();
