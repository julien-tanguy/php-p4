<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e4p4</title>
</head>
<body>
    <?php
    function infoNumber($number1, $number2) {
        // verifie que les paramétres ne sont pas des chaines de carractéres
        if ((is_string($number1) == true) || (is_string($number2) == true)) {
            return 'ERREUR, veuillez rentrer des nombres';
        }else {
        //sinon, verifie qui est le plus grand
            if ($number1 > $number2) {
            return 'Le premier nombre est le plus grand.';
        }else if ($number1 < $number2) {
            return 'le premier nombre est plus petit.';
        }else {
            return 'Les deux nombres sont identiques';
        }
        }
    }
    ?>
    <p><?php echo infoNumber(23, 6) ?></p>
</body>
</html>