<?php
function message()
{
    $hello = "Bonjour";
    $firstname = 'jean-Pierre';
    return $hello . ' ' . ucfirst($firstname);
}
echo message();