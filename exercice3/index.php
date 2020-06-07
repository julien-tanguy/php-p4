<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e3p4</title>
</head>
<body>
    <?php
    //les paramétres prédéfinis seront utilisés si aucuns paramétres ne sont entrés   
    function returnName(string $nom = 'John ',string $prenom = 'DOE') {
        //return les deux élements recus en attributs concatener 
        return $nom . ' ' . $prenom;
    }
    ?>
    <p><?php echo returnName('Julien', 'TANGUY') ?></p>
</body>
</html>