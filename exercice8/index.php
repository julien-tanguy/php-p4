<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e8p4</title>
</head>
<body>
    <?php
    //les paramétres prédéfinis seront utilisés si aucuns paramétres ne sont entrés
    function somme(int $number1 = 1, int $number2 = 2, int $number3 = 3) {
        return $number1 + $number2 + $number3;
    }
    ?>
    <p><?php echo somme(5, 78, 99) ?></p>
</body>
</html>