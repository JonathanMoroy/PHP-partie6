<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie6/exercice1?nom=Nemare&prenom=Jean">Exercice 1</a></li>
                <li><a href="http://partie6/exercice2?nom=Nemare&prenom=Jean">Exercice 2</a></li>
                <li><a href="http://partie6/exercice3?dateDebut=2/05/2016&dateFin=27/11/2016">Exercice 3</a></li>
                <li><a href="http://partie6/exercice5?semaine=12">Exercice 5</a></li>
                <li><a href="http://partie6/exercice6?batiment=12&salle=101">Exercice 6</a></li>
            </ul>
        </nav>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br/> index.php?langage=PHP&serveur=LAMP</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètre de l'URL:
            <?php
            // On vérifie que les données sont bien dans le tableau GET
            if (isset($_GET['langage']) && isset($_GET['serveur'])) {
                echo $_GET['langage'] . ' ' . $_GET['serveur'];
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un langage et un serveur.';
            }
            ?>
        </p>
    </body>
</html>