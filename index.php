<?php
if (isset($_POST['valider'])) {

    if (isset($_POST['civility'])) {
        $civility = $_POST['civility'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    if (isset($_POST['society'])) {
        $society = $_POST['society'];
    }
    $civilityRegex = '#^[a-zA-Z]{3,20}$#';
    $civilityConfirm = $civility && (preg_match($civilityRegex, $civility) == true);
    $nameRegex = '#^[a-zA-Z]{3,20}$#';
    $nameConfirm = $name && (preg_match($nameRegex, $name) == true);
    $firstNameRegex = '#^[a-zA-Z]{3,20}$#';
    $firstNameConfirm = $firstName && (preg_match($firstNameRegex, $firstName) == true);
    $ageRegex = '#^[0-9]{1,3}$#';
    $ageConfirm = $age && (preg_match($ageRegex, $age) == true);
    $societyRegex = '#^[a-zA-Z]{3,30}$#';
    $societyConfirm = $society && preg_match($societyRegex, $society) == true;
    ?>
    <!DOCTYPE html>
    <html lang="FR">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <title>PHP Partie 10 exercice 1</title>
        </head>
        <body>
            <div class="container" id="page-top">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 10 exercice 2</h1>
                        <h3 align="center">Exercice 2</h3>
                        <p align="center">Faire une page permettant de saisir les informations suivantes :</p>
                        <div align="center">
                            <ul>
                                <li>Civilité (liste déroulante)</li>
                                <li>Nom</li>
                                <li>Prénom</li>
                                <li>Age</li>
                                <li>Société</li>                       
                            </ul>
                            <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="">
                    <div align="center">                       
                        <select name="civility">
                            <option value=""><?= $civility ?></option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>                     
                        <div align="center"><input type="text" placeholder="Votre nom" name="name" pattern="[a-zA-Z]{3,20}" value="<?= $name ?>" required/></div>
                        <div align="center"><input type="text" placeholder="Votre Prénom" name="firstName" pattern="[a-zA-Z]{3,20}" value="<?= $firstName ?>" required/></div>
                        <div align="center"><input type="text" placeholder="Votre age" name="age" pattern="[0-9]{1,3}" value="<?= $age ?>" required/></div>
                        <div align="center"><input type="text" placeholder="Votre société" name="society" pattern="[a-zA-Z]{3,20}" value="<?= $society ?>" required/></div>
                        <div align="center"><input type="submit" name="valider" value="Valider" /></div>
                </form>

                <div align="center">
                    <p><b>Votre civilité : </b><?= $civility ?></p>
                    <p><b>Votre nom : </b><?= $name ?></p>
                    <p><b>Votre prénom : </b><?= $firstName ?> </p>
                    <p><b>Vous age : </b><?= $age ?></p>
                    <p><b>Votre société : </b><?= $society ?></p>
                </div>
                <?php
            } else {
                ?>
                <body>
                    <div class="container" id="page-top">
                        <div class="row">
                            <div class="col-xl-12">
                                <h1 align="center">PHP Partie 10 exercice 2</h1>
                                <h3 align="center">Exercice 2</h3>
                                <p align="center">Faire une page permettant de saisir les informations suivantes :</p>
                                <div align="center">
                                    <ul>
                                        <li>Civilité (liste déroulante)</li>
                                        <li>Nom</li>
                                        <li>Prénom</li>
                                        <li>Age</li>
                                        <li>Société</li>                       
                                    </ul>
                                    <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="">
                            <div align="center">                       
                                <select name="civility">
                                    <option value=""></option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>                     
                                <div align="center"><input type="text" placeholder="Votre nom" name="name" pattern="[a-zA-Z]{3,20}" value="" required/></div>
                                <div align="center"><input type="text" placeholder="Votre Prénom" name="firstName" pattern="[a-zA-Z]{3,20}" value="" required/></div>
                                <div align="center"><input type="text" placeholder="Votre age" name="age" pattern="[0-9]{1,3}" value="" required/></div>
                                <div align="center"><input type="text" placeholder="Votre société" name="society" pattern="[a-zA-Z]{3,20}" value="" required/></div>
                                <div align="center"><input type="submit" name="valider" value="Valider" /></div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
        </div>
    </body>
</html>


