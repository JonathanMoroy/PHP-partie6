<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie6/exercice1?nom=Nemare&prenom=Jean">Exercice 1</a></li>
                <li><a href="http://partie6/exercice3?dateDebut=2/05/2016&dateFin=27/11/2016">Exercice 3</a></li>
                <li><a href="http://partie6/exercice4?langage=PHP&serveur=LAMP">Exercice 4</a></li>
                <li><a href="http://partie6/exercice5?semaine=12">Exercice 5</a></li>
                <li><a href="http://partie6/exercice6?batiment=12&salle=101">Exercice 6</a></li>
            </ul>
        </nav>
        <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :<br/> index.php?nom=Nemare&prenom=Jean</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètre de l'URL:
            <?php
            // On vérifie qu'on a le nom, le prénom et l'âge
            if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['age'])) {
                echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . $_GET['nom'];
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un nom, un prénom et un âge !';
            }
            ?>
        </p>
    </body>
</html>