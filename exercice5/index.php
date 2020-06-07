<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e5p4</title>
</head>
<body>
    <?php
    //demande un parametre de type string et un de type int
    function concatenation(string $string,int $number) {
        return $string . ' ' . $number;
    }
    ?>
    <p><?php echo concatenation('votre numéro est le :', 6) ?></p>
</body>
</html>