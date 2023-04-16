<?php
require "../inc/functions.php";

if (!empty($_POST)) {

    // var_dump($_POST)
    // I get the informations and put them in a variable , and a value by default
    $premierTrimestreHistoire = (int) $_POST['1erh'] ?? false;
    $deuxiemeTrimestreHistoire = (int) $_POST['2emeh'] ?? false;
    $troisiemeTrimestreHistoire = (int) $_POST['3emeh'] ?? false;
    $premierTrimestreAnglais = (int) $_POST['1era'] ?? false;
    $deuxiemeTrimestreAnglais = (int) $_POST['2emea'] ?? false;
    $troisiemeTrimestreAnglais = (int) $_POST['3emea'] ?? false;
    $premierTrimestreEspagnol = (int) $_POST['1ere'] ?? false;
    $deuxiemeTrimestreEspagnol = (int) $_POST['2emee'] ?? false;
    $troisiemeTrimestreEspagnol = (int) $_POST['3emee'] ?? false;
    $premierTrimestreES = (int) $_POST['1eres'] ?? false;
    $deuxiemeTrimestreES = (int) $_POST['2emes'] ?? false;
    $troisiemeTrimestreES = (int) $_POST['3emes'] ?? false;
    $noteEMC = (int) $_POST['1eremc'] ?? false;
    $premierTrimestreSPE1 = (int) $_POST['1eresp1'] ?? false;
    $deuxiemeTrimestreSPE1 = (int) $_POST['2emesp1'] ?? false;
    $troisiemeTrimestreSPE1 = (int) $_POST['3spe'] ?? false;
    $epreuveTerminaleFrancaisEcrit = (int) $_POST['francaisEcrit'] ?? false;
    $epreuveTerminaleFrancaisOral = (int) $_POST['francaisOral'] ?? false;
    $premierTrimestreTerminaleH = (int) $_POST['1erhT'] ?? false;
    $deuxiemeTrimestreTerminaleH = (int) $_POST['2emehT'] ?? false;
    $troisiemeTrimestreTerminaleH = (int) $_POST['3emehT'] ?? false;
    $premierTrimestreAnglaisT = (int) $_POST['1eraT'] ?? false;
    $deuxiemeTrimestreAnglaisT = (int) $_POST['2emeaT'] ?? false;
    $troisiemeTrimestreAnglaisT = (int) $_POST['3emeaT'] ?? false;
    $premierTrimestreEspagnolTerminale = (int) $_POST['1ereT'] ?? false;
    $deuxiemeTrimestreEspagnolT = (int) $_POST['2emeeT'] ?? false;
    $troisiemeTrimestreEspagnolT = (int) $_POST['3emeeT'] ?? false;
    $premierTrimestreEpsT = (int) $_POST['1epsT'] ?? false;
    $dexiemeTrimestreEpsT = (int) $_POST['2epsT'] ?? false;
    $troisiemeTrimestreEpsT = (int) $_POST['3epsT'] ?? false;
    $premierTrimestreEsT = (int) $_POST['1eresT'] ?? false;
    $dexiemeTrimestreEsT = (int) $_POST['2emesT'] ?? false;
    $troisiemeTrimestreEsT = (int) $_POST['3emesT'] ?? false;
    $noteEMCT = (int) $_POST['1eremcT'] ?? false;
    $philoT = (int) $_POST['philo'] ?? false;
    $spe2T = (int) $_POST['spe2'] ?? false;
    $spe3T = (int) $_POST['spe3'] ?? false;
    $grandOral = (int) $_POST['grandOral'] ?? false;
    $option1T = (int) $_POST['option1T'] ?? false;
    $option2T = (int) $_POST['option2'] ?? false;
    $latinT = (int) $_POST['latinT'] ?? false;
    $grecT = (int) $_POST['grecT'] ?? false;

    //I check the data , are they valid ?
    if (
        $premierTrimestreHistoire !== false &&
        $deuxiemeTrimestreHistoire !== false &&
        $troisiemeTrimestreHistoire !== false  &&
        $premierTrimestreAnglais !== false &&
        $deuxiemeTrimestreAnglais !== false &&
        $troisiemeTrimestreAnglais !== false &&
        $premierTrimestreEspagnol !== false &&
        $deuxiemeTrimestreEspagnol !== false &&
        $troisiemeTrimestreEspagnol !== false &&
        $premierTrimestreES !== false &&
        $deuxiemeTrimestreES !== false &&
        $troisiemeTrimestreES !== false &&
        $noteEMC !== false  &&
        $premierTrimestreSPE1 !== false &&
        $deuxiemeTrimestreSPE1 !== false &&
        $troisiemeTrimestreSPE1 !== false &&
        $epreuveTerminaleFrancaisEcrit !== false &&
        $epreuveTerminaleFrancaisOral !== false &&
        $premierTrimestreTerminaleH !== false &&
        $deuxiemeTrimestreTerminaleH !== false &&
        $troisiemeTrimestreTerminaleH !== false &&
        $premierTrimestreAnglaisT !== false &&
        $deuxiemeTrimestreAnglaisT !== false &&
        $troisiemeTrimestreAnglaisT !== false &&
        $premierTrimestreEspagnolTerminale !== false &&
        $deuxiemeTrimestreEspagnolT !== false &&
        $troisiemeTrimestreEspagnolT !== false &&
        $premierTrimestreEpsT !== false &&
        $dexiemeTrimestreEpsT !== false &&
        $troisiemeTrimestreEpsT !== false &&
        $premierTrimestreEsT !== false &&
        $dexiemeTrimestreEsT !== false &&
        $troisiemeTrimestreEsT !== false &&
        $noteEMCT !== false  &&
        $philoT !== false &&
        $spe2T !== false &&
        $spe3T !== false &&
        $grandOral !== false &&
        $option1T !== false &&
        $option2T !== false &&
        $latinT !== false &&
        $grecT !== false

    
    ) {

     
        //I initiate a variable and put in it , the function and the values of the three variables
        $resultH = additionHistoire($premierTrimestreHistoire, $deuxiemeTrimestreHistoire, $troisiemeTrimestreHistoire);
        $resultA = additionAnglais($premierTrimestreAnglais, $deuxiemeTrimestreAnglais, $troisiemeTrimestreAnglais);
        $resultE = additionEspagnol($premierTrimestreEspagnol, $deuxiemeTrimestreEspagnol, $troisiemeTrimestreEspagnol);
        $resultES = additionES($premierTrimestreES, $deuxiemeTrimestreES, $troisiemeTrimestreES);
        $noteEMC = noteEMC($noteEMC);
        $resultSPE1 = additionSPE1($premierTrimestreSPE1, $deuxiemeTrimestreSPE1, $troisiemeTrimestreSPE1);
        $resultEpreuveTerminale = additionEpreuveTerminaleFrancais($epreuveTerminaleFrancaisEcrit, $epreuveTerminaleFrancaisOral);
        $resultHT = additionHistoireTerminale($premierTrimestreTerminaleH, $deuxiemeTrimestreTerminaleH, $troisiemeTrimestreTerminaleH);
        $resultAT = additionAnglaisTerminale($premierTrimestreAnglaisT, $deuxiemeTrimestreAnglaisT, $troisiemeTrimestreAnglaisT);
        $resultET = additionEspagnolTerminale($premierTrimestreEspagnolTerminale, $deuxiemeTrimestreEspagnolT, $troisiemeTrimestreEspagnolT);
        $resultEpsT = additionEpsTerminale($premierTrimestreEpsT, $dexiemeTrimestreEpsT, $troisiemeTrimestreEpsT);
        $resultEsT = additionEsTerminale($premierTrimestreEsT, $dexiemeTrimestreEsT, $troisiemeTrimestreEsT);
        $noteEMCT = noteEMCT($noteEMCT);
        $resultEpreuveT = additionEpreuveTerminale($philoT, $spe2T, $spe3T, $grandOral);
        $resultOptionT = additionOptionTerminale($option1T, $option2T, $latinT, $grecT);
        $moyenneG = moyenneG($resultH, $resultA, $resultE, $resultES, $noteEMC, $resultSPE1, $resultEpreuveTerminale, $resultHT, $resultAT, $resultET, $resultEpsT, $resultEsT, $noteEMCT, $resultEpreuveT, $resultOptionT);
        //$resultPhiloT = noteDePhilo($philoT);
        //$resultSpe1EtSpe2 = additionSpe1EtSpe2($spe2T, $spe3T);
        // $noteGrandOral = noteGrandOral($grandOral);

        
    }

   
  

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Simulateur</title>
</head>


<body>
  <h2 class="text-center text-uppercase font-weight-bold">Simulateur de moyenne au bac général 2023-2024</h2>
<div class="container">

<div class="">
<p class="text-danger"> votre moyenne est de <?= $moyenneG ?>/20</p>
<h1 class="container">Première</h1>
  <legend class="container">Contrôle continu</legend>


        <form action="" method="post">
          <fieldset>
            <h1>Histoire-gépgraphie coef 3</h1>
            <div class="form-group">
              <label for="1erh">1er trimestre</label>
              <input type="number" class="1er" name="1erh" id="nom" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emeh">2e trimestre</label>
                <input type="number" class="2eme" name="2emeh" id="2eme" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emeh">3e trimestre</label>
                <input type="number" class="3eme" name="3emeh" id="3eme" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne" for="moyenne">Moyenne</label>
                <input class="moyenne" type="text" placeholder="<?=  $resultH ?>">
            </div>
          </fieldset><br>
       
          <fieldset class="anglais">
            <h1>Langue vivante A coef 3</h1>
            <div class="form-group">
              <label for="1era">1er trimestre</label>
              <input type="number" class="1era" name="1era" id="nom" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emea">2e trimestre</label>
                <input type="number" class="2emea" name="2emea" id="2emea" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emea">3e trimestre</label>
                <input type="number" class="3emea" name="3emea" id="3emea" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_anglais" for="moyenne">Moyenne</label>
                <input class="moyenne_anglais" type="text" placeholder="<?=  $resultA ?>">
            </div>
          </fieldset><br>
       
          <fieldset class="espagnol">
            <h1>Langue vivante B coef 3</h1>
            <div class="form-group">
              <label for="1ere">1er trimestre</label>
              <input type="number" class="1ere" name="1ere" id="1ere" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emee">2e trimestre</label>
                <input type="number" class="2emee" name="2emee" id="2emee" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emee">3e trimestre</label>
                <input type="number" class="3emee" name="3emee" id="3emee" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_espagnol" for="moyenne">Moyenne</label>
                <input class="moyenne_espagnol" type="text" placeholder="<?=  $resultE ?>">
            </div>
          </fieldset><br>

          <fieldset class="enseignement_scientifque">
            <h1>Enseignement scientifique coef 3</h1>
            <div class="form-group">
              <label for="1eres">1er trimestre</label>
              <input type="number" class="1eres" name="1eres" id="1eres" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emes">2e trimestre</label>
                <input type="number" class="2emes" name="2emes" id="2emes" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emes">3e trimestre</label>
                <input type="number" class="3emes" name="3emes" id="3emes" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_enseignement_scientifique" for="moyenne">Moyenne</label>
                <input class="moyenne_enseignement_scientifique" type="text" placeholder="<?=  $resultES ?>">
            </div>
          </fieldset><br>

          <fieldset class="enseignement_civique">
            <h1>Enseignement moral et civique coef 1</h1>
            <div class="form-group">
              <label for="1eremc">Note</label>
              <input type="number" class="1eremc" name="1eremc" id="1eremc" placeholder="0">
            </div>
              <div class="form-group">
                <label class="moyenne_enseignement_civique" for="moyenne">Moyenne</label>
                <input class="moyenne_enseignement_civique" type="text" placeholder="<?=  $noteEMC ?>">
            </div>
          </fieldset><br>

          <fieldset class="spe1">
            <h1>Spécialité 1 coef 8</h1>
            <div class="form-group">
              <label for="1eresp1">1er trimestre</label>
              <input type="number" class="1eresp1" name="1eresp1" id="1eresp1" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emesp1">2e trimestre</label>
                <input type="number" class="2emesp1" name="2emesp1" id="2emesp1" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3spe">3e trimestre</label>
                <input type="number" class="3spe" name="3spe" id="3spe" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_spe1" for="moyenne">Moyenne</label>
                <input class="moyenne_spe1" type="text" placeholder="<?=  $resultSPE1 ?>">
            </div>
          </fieldset><br>

          <fieldset class="epreuves_terminales">
            <h1>Epreuves terminales coef 5</h1>
            <div class="form-group">
              <label for="francaisEcrit">Français</label>
              <input type="number" class="francaisEcrit" name="francaisEcrit" id="francaisEcrit" placeholder="0">
            </div>
            <div class="form-group">
                <label for="francaisOral">Orale</label>
                <input type="number" class="francaisOral" name="francaisOral" id="francaisOral" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_epreuvesTerminale" for="moyenne">Moyenne</label>
                <input class="moyenne_epreuvesTerminale" type="text" placeholder="<?=  $resultEpreuveTerminale ?>">
            </div>
          </fieldset><br>

      </div>

      <div class="">

        <h1 class="container">Terminale</h1>
          <legend class="container">Contrôle continu</legend>

        <fieldset>
            <h1>Histoire-gépgraphie coef 3</h1>
            <div class="form-group">
              <label for="1erhT">1er trimestre</label>
              <input type="number" class="1erhT" name="1erhT" id="nom" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emehT">2e trimestre</label>
                <input type="number" class="2emehT" name="2emehT" id="2eme" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emehT">3e trimestre</label>
                <input type="number" class="3emehT" name="3emehT" id="3eme" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne" for="moyenne">Moyenne</label>
                <input class="moyenne" type="text" placeholder="<?=  $resultHT ?>">
          </fieldset><br>
       
          <fieldset class="anglais">
            <h1>Langue vivante A coef 3</h1>
            <div class="form-group">
              <label for="1eraT">1er trimestre</label>
              <input type="number" class="1eraT" name="1eraT" id="nom" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emeaT">2e trimestre</label>
                <input type="number" class="2emeaT" name="2emeaT" id="2emeaT" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emeaT">3e trimestre</label>
                <input type="number" class="3emeaT" name="3emeaT" id="3emeaT" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_anglais" for="moyenne">Moyenne</label>
                <input class="moyenne_anglais" type="text" placeholder="<?= $resultAT ?>">
            </div>
          </fieldset><br>
       
          <fieldset class="espagnol">
            <h1>Langue vivante B coef 3</h1>
            <div class="form-group">
              <label for="1ereT">1er trimestre</label>
              <input type="number" class="1ereT" name="1ereT" id="1ere" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emeeT">2e trimestre</label>
                <input type="number" class="2emeeT" name="2emeeT" id="2emeeT" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emeeT">3e trimestre</label>
                <input type="number" class="3emeeT" name="3emeeT" id="3emeeT" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_espagnol" for="moyenne">Moyenne</label>
                <input class="moyenne_espagnol" type="text" placeholder="<?= $resultET ?> ">
            </div>
          </fieldset><br>

          <fieldset class="enseignement_scientifque">
            <h1>EPS coef 6</h1>
            <div class="form-group">
              <label for="1epsT">1er trimestre</label>
              <input type="number" class="1epsT" name="1epsT" id="1epsT" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2epsT">2e trimestre</label>
                <input type="number" class="2epsT" name="2epsT" id="2epsT" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3epsT">3e trimestre</label>
                <input type="number" class="3epsT" name="3epsT" id="3epsT" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_enseignement_scientifique" for="moyenne">Moyenne</label>
                <input class="moyenne_enseignement_scientifique" type="text" placeholder="<?= $resultEpsT ?>">
            </div>
          </fieldset><br>

          <fieldset class="enseignement_scientifque">
            <h1>Enseignement scientifique coef 3</h1>
            <div class="form-group">
              <label for="1eresT">1er trimestre</label>
              <input type="number" class="1eresT" name="1eresT" id="1eresT" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emesT">2e trimestre</label>
                <input type="number" class="2emesT" name="2emesT" id="2emesT" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emesT">3e trimestre</label>
                <input type="number" class="3emesT" name="3emesT" id="3emesT" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_enseignement_scientifique" for="moyenne">Moyenne</label>
                <input class="moyenne_enseignement_scientifique" type="text" placeholder="<?=  $resultEsT ?>">
            </div>
          </fieldset><br>

          <fieldset class="enseignement_civique">
            <h1>Enseignement moral et civique coef 1</h1>
            <div class="form-group">
              <label for="1eremcT">Note</label>
              <input type="number" class="1eremcT" name="1eremcT" id="1eremcT" placeholder="0">
            </div>
              <div class="form-group">
                <label class="moyenne_enseignement_civique" for="moyenne">Moyenne</label>
                <input class="moyenne_enseignement_civique" type="text" placeholder="<?=  $noteEMCT ?>">
            </div>
          </fieldset><br>

          <fieldset class="epreuves_terminales">
            <h1>Epreuves terminales</h1>
            <div class="form-group">
              <label for="philo">Philosophie coef 8</label>
              <input type="number" class="philo" name="philo" id="philo" placeholder="0">
            </div>
            <div class="form-group">
                <label for="spe2">Spécialité 2 coef 16</label>
                <input type="number" class="spe2" name="spe2" id="spe2" placeholder="0">
              </div>
              <div class="form-group">
                <label for="spe3">Spécialité 3 coef 16</label>
                <input type="number" class="spe3" name="spe3" id="spe3" placeholder="0">
              </div>
              <div class="form-group">
                <label for="grandOral">Grand Oral coef 10</label>
                <input type="number" class="grandOral" name="grandOral" id="grandOral" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_epreuvesTerminale" for="moyenne">Moyenne</label>
                <input class="moyenne_epreuvesTerminale" type="text" placeholder="<?=  $resultEpreuveT ?>">
            </div>
          </fieldset><br>

          <fieldset class="options_premiere">
            <h1>Options coef 2</h1>
            <div class="form-group">
              <label for="option1T">Option 1 </label>
              <input type="number" class="option1T" name="option1T" id="option1T" placeholder="0">
            </div>
            <div class="form-group">
                <label for="option2">Option 2</label>
                <input type="number" class="option2" name="option2" id="option2" placeholder="0">
              </div>
              <div class="form-group">
                <label for="latinT">Latin</label>
                <input type="number" class="latinT" name="latinT" id="latinT" placeholder="0">
              </div>
              <div class="form-group">
                <label for="grecT">Grec</label>
                <input type="number" class="grecT" name="grecT" id="grecT" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_options" for="moyenne">Moyenne</label>
                <input class="moyenne_options" type="text" placeholder="<?=  $resultOptionT ?>">
            </div>
          </fieldset><br>

           <button class="w-100">Calculer de la moyenne</button>
    
    </form>
</div>
</div>


</body>

</html>
