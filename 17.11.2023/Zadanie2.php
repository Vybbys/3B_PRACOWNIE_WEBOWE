<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $zm1 = 5;

        if($zm1 < 0)
            echo "Liczba nie moze byc ujemna!";
        else
            echo sqrt($zm1);
    ?>
</body>
</html>