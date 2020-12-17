<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="www/css/styles.less" />
    <script src="librairie/less.js"></script>
    <script src="librairie/jquery-3.5.1.min.js"></script>
    <script src="librairie/jquery.validate.min.js" ></script>
    <script src="www/js/jq_validation.js" async></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?controleur=eleve&action=controleur_get_all_eleve"> Accueil</a></li>
                <li><a href="index.php?controleur=devoir&action=controleur_get_all_devoir"> Gestion devoir</a></li>
                <li><a href="index.php?controleur=devoirEleve&action=controleur_get_all_devoir_eleve">Notes des élèves/devoirs</a></li>
            </ul>
        </nav>
    </header>