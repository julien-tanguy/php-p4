<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e2p4</title>
</head>
<body>
    <?php
    //declaration de la fonction
    function returnString(string $string) {
        //var_dump affiche a l'ecran le type de la variable $string
        var_dump($string);
        //return l'élement recu en paramétres
        return $string;
    }
    ?>
    <!--le parametre int 4 sera converti en string '4' grace a la déclaration de type-->
    <p><?php echo returnString(4) ?></p>
</body>
</html>