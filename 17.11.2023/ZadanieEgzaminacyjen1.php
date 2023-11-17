<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pl = 50;
        $usd = 3.21;
        $eur = 4.32;
        $fr = 3.98;

        $wybranaWaluta = "eur";

        switch($wybranaWaluta)
        {
            case "usd":
                echo $pl * $usd;
                break;
            case "eur":
                echo $pl * $eur;
            break;
            case "fr":
                echo $pl * $fr;
            break;
        }
    ?>
</body>
</html>