<?php
$text = "Bonjour le Monde !";
$replace = str_replace(' ','', $text); // str_replace() remplace les espaces par rien
echo strlen($replace)." caractères";// strlen() compte le nombre de caractères
?>