<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e7p4</title>
</head>
<body>
    <?php
    function presentation(string $genre, int $age) {
        //Le premier if verifie le genre, le if imbriqué verifie l'age
        if ($genre == 'homme') {
            if ($age >= 18) {
                return 'Vous êtes un homme et vous êtes majeur';
            }else {
                return 'Vous êtes un homme et vous êtes mineur';
            }
        }else {
            if ($age >= 18) {
                return 'Vous êtes un femme et vous êtes majeur';
            }else {
                return 'Vous êtes un femme et vous êtes mineur';
            } 
        }
    }
    ?>
    <p><?php echo presentation('femme', 20) ?></p>
</body>
</html>