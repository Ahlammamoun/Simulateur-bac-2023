<?php



function additionHistoire($premierTrimestreHistoire, $deuxiemeTrimestreHistoire, $troisiemeTrimestreHistoire)
{

    $result = (($premierTrimestreHistoire + $deuxiemeTrimestreHistoire + $troisiemeTrimestreHistoire) * 3)  ;


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

function additionHistoireTerminale($premierTrimestreTerminaleH, $deuxiemeTrimestreTerminaleH, $troisiemeTrimestreTerminaleH)
{
    $result = ($premierTrimestreTerminaleH + $deuxiemeTrimestreTerminaleH + $troisiemeTrimestreTerminaleH) * 3;
   return $result;

}
function additionAnglaisTerminale($premierTrimestreAnglaisT, $deuxiemeTrimestreAnglaisT, $troisiemeTrimestreAnglaisT)
{
    $result = ($premierTrimestreAnglaisT + $deuxiemeTrimestreAnglaisT + $troisiemeTrimestreAnglaisT) * 3;
   return $result;

}

function additionEspagnolTerminale($premierTrimestreEspagnolTerminale, $deuxiemeTrimestreEspagnolT, $premierTrimestreEspagnolT)
{
    $result = ($premierTrimestreEspagnolTerminale + $deuxiemeTrimestreEspagnolT + $premierTrimestreEspagnolT) * 3;
   return $result;

}
function additionEpsTerminale($premierTrimestreEpsT, $dexiemeTrimestreEpsT, $troisiemeTrimestreEpsT)
{
    $result = ($premierTrimestreEpsT + $dexiemeTrimestreEpsT + $troisiemeTrimestreEpsT) * 6;
   return $result;

}
function additionEsTerminale($premierTrimestreEsT,  $dexiemeTrimestreEsT, $troisiemeTrimestreEsT)
{
    $result = ($premierTrimestreEsT + $dexiemeTrimestreEsT + $troisiemeTrimestreEsT) * 3;
    return $result;

}
function noteEMCT($noteEMCT)
{
    $result = ($noteEMCT);
    return $result;

}
function additionEpreuveTerminale($philoT, $spe2T, $spe3T, $grandOral)
{

    $result = ($philoT * 8 ) + ($spe2T * 16 ) + ($spe3T * 16 ) + ($grandOral * 10 );
    return $result;

};

function  additionOptionTerminale($option1T, $option2T, $latinT, $grecT)
{

    $result = ($option1T + $option2T + $latinT + $grecT) * 2;
    return $result; 

};

function moyenneG($resultH, $resultA, $resultE, $resultES, $noteEMC, $resultSPE1, $resultEpreuveTerminale, $resultHT, $resultAT, $resultET, $resultEpsT, $resultEsT, $noteEMCT, $resultEpreuveT, $resultOptionT)
{
   
    $result = (($resultH + $resultA + $resultE + $resultES  + $noteEMC + $resultSPE1 + $resultEpreuveTerminale  + $resultHT + $resultAT + $resultET + $resultEpsT + $resultEsT + $noteEMCT + $resultEpreuveT + $resultOptionT))  / 184;
    return $result;

};
function mention($moyenne)
{

    if ($moyenne > 15){
        $mention  ='Bravo , vous avez la mention très bien';
       // echo '<h1 class=mention>   vous avez la mention très bien   </h1>';
    }elseif($moyenne < 15 && $moyenne > 13 ){
        //echo 'vous avez la mention bien';
        $mention = 'Bien joué, vous avez la mention bien';
    }else{
      //echo 'loupé';
      $mention = 'vous n\'avez pas de mention' ;
    }
    return $mention;


}

