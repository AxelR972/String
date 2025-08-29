<?php
function AnalyseDeTon(): bool
{
    $mot = "Je suis très satisfait ! ";
    $needle = "!";
    return str_ends_with($mot, $needle);
}

var_dump(AnalyseDeTon());
