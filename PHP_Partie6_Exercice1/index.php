<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 6</h1>

    <h2 class="">Exercice 1</h2>
    <p style="color:#8080FF">Créez un formulaire avec les champs "nom" et "prénom". 
    À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</p>
    
        <a href="index.php?nom=MOLINA&amp;prenom=Emilie">lien</a>
    <?php
    echo 'Nom : '.$_GET['nom'].' '.'Prénom : ' .$_GET['prenom'];
    ?>
</body>
</html>