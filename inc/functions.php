<?php



function additionHistoire($premierTrimestreHistoire, $deuxiemeTrimestreHistoire, $troisiemeTrimestreHistoire)
{

    $result = ($premierTrimestreHistoire + $deuxiemeTrimestreHistoire + $troisiemeTrimestreHistoire) * 3;


   return $result;

   
}

function additionAnglais($premierTrimestreAnglais, $deuxiemeTrimestreAnglais, $troisiemeTrimestreAnglais)
{
    $result = ($premierTrimestreAnglais + $deuxiemeTrimestreAnglais + $troisiemeTrimestreAnglais) * 3;
    
   return $result;

}

function additionEspagnol($premierTrimestreEspagnol, $deuxiemeTrimestreEspagnol, $troisiemeTrimestreEspagnol)
{
    $result = ($premierTrimestreEspagnol + $deuxiemeTrimestreEspagnol + $troisiemeTrimestreEspagnol) * 3;
   return $result;
}

function additionES($premierTrimestreES, $deuxiemeTrimestreES, $troisiemeTrimestreES)
{
    $result = ($premierTrimestreES + $deuxiemeTrimestreES + $troisiemeTrimestreES) * 3 ;
   return $result;
}

function noteEMC($noteEMC)
{
    $result = $noteEMC;
   return $result;

}

function additionSPE1($premierTrimestreSPE1, $deuxiemeTrimestreSPE1, $troisiemeTrimestreSPE1)
{
    $result = ($premierTrimestreSPE1 + $deuxiemeTrimestreSPE1 + $troisiemeTrimestreSPE1) * 8;
   return $result;

}
function additionEpreuveTerminaleFrancais($epreuveTerminaleFrancaisEcrit, $epreuveTerminaleFrancaisOral)
{
    $result = ($epreuveTerminaleFrancaisEcrit + $epreuveTerminaleFrancaisOral) * 5;
   return $result;

}