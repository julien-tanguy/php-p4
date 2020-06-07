<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e6p4</title>
</head>
<body>
    <?php
    function presentation(string $lastname,string $firstname, int $age) {
        //concatenation de parametres de type string et int
        return 'Bonjour, ' . $lastname . ' ' . $firstname . ', tu as ' . $age . 'ans.';
    }
    ?>
    <p><?php echo presentation('TANGUY', 'Julien', 30) ?></p>
</body>
</html>