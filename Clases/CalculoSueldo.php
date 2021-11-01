<?php

function prestacionesSociales($us)
{
    $ultimoSueldo = $us;
    $ps= $ultimoSueldo * 0.80;
    return $ps;
}

// print prestacionesSociales(6);
