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
    $troisiemeTrimestreSPE1 = (int) $_POST['3emesp1'] ?? false;
    $epreuveTerminaleFrancaisEcrit = (int) $_POST['francaisEcrit'] ?? false;
    $epreuveTerminaleFrancaisOral = (int) $_POST['francaisOral'] ?? false;
   
  



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
        $epreuveTerminaleFrancaisOral !== false

    ) {

        //I initiate a variable and put in it , the function and the values of the three variables
        $resultH = additionHistoire($premierTrimestreHistoire, $deuxiemeTrimestreHistoire, $troisiemeTrimestreHistoire);
        $resultA = additionAnglais($premierTrimestreAnglais, $deuxiemeTrimestreAnglais, $troisiemeTrimestreAnglais);
        $resultE = additionEspagnol($premierTrimestreEspagnol, $deuxiemeTrimestreEspagnol, $troisiemeTrimestreEspagnol);
        $resultES = additionES($premierTrimestreES, $deuxiemeTrimestreES, $troisiemeTrimestreES);
        $noteEMC = noteEMC($noteEMC);
        $resultSPE1 = additionSPE1($premierTrimestreSPE1, $deuxiemeTrimestreSPE1, $troisiemeTrimestreSPE1);
        $resultEpreuveTerminale = additionEpreuveTerminaleFrancais($epreuveTerminaleFrancaisEcrit, $epreuveTerminaleFrancaisOral);
        var_dump($premierTrimestreSPE1);
        var_dump($deuxiemeTrimestreSPE1);
        var_dump($troisiemeTrimestreSPE1);
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
<div class="container">
<div class="">

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
                <label for="3emesp1">3e trimestre</label>
                <input type="number" class="3emesp1" name="3emesp1" id="3emesp1" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_spe1" for="moyenne">Moyenne</label>
                <input class="moyenne_spe1" type="text" placeholder="<?=  $resultSPE1 ?>">
            </div>
          </fieldset><br>

          <fieldset class="epreuves_terminales">
            <h1>Epreuves terminales coef 5</h1>
            <div class="form-group">
              <label for="francaisEcrit">Français<écrit</label>
              <input type="number" class="francaisEcrit" name="francaisEcrit" id="francaisEcrit" placeholder="0">
            </div>
            <div class="form-group">
                <label for="francaisOral">2e trimestre</label>
                <input type="number" class="francaisOral" name="francaisOral" id="francaisOral" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_epreuvesTerminale" for="moyenne">Moyenne</label>
                <input class="moyenne_moyenne_epreuvesTerminale" type="text" placeholder="<?=  $resultSPE1 ?>">
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
                <input class="moyenne" type="text" placeholder="">
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
                <input class="moyenne_anglais" type="text" placeholder="">
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
                <input class="moyenne_espagnol" type="text" placeholder="">
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
                <input class="moyenne_enseignement_scientifique" type="text" placeholder="">
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
                <input class="moyenne_enseignement_civique" type="text" placeholder="">
            </div>
          </fieldset><br>

          <fieldset class="spe1">
            <h1>EPS</h1>
            <div class="form-group">
              <label for="1erepsT">1er trimestre</label>
              <input type="number" class="1erepsT" name="1erepsT" id="1erepsT" placeholder="0">
            </div>
            <div class="form-group">
                <label for="2emeepsT">2e trimestre</label>
                <input type="number" class="2emeepsT" name="2emeepsT" id="2emeepsT" placeholder="0">
              </div>
              <div class="form-group">
                <label for="3emesp1">3e trimestre</label>
                <input type="number" class="3emesp1" name="3emesp1" id="3emesp1" placeholder="0">
              </div>
              <div class="form-group">
                <label class="moyenne_spe1" for="moyenne">Moyenne</label>
                <input class="moyenne_spe1" type="text" placeholder="">
            </div>
          </fieldset><br>




           <button>Calculer de la moyenne</button>

    </form>
</div>
</div>


</body>

</html>
