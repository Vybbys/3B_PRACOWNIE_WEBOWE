<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jezyk="h";

        if($jezyk == "n")
        {
            echo"Niemiecki";
        }
        else if($jezyk == "a")
        {
            echo "Angielski";
        }
        else if($jezyk == "h")
        {
            echo "Hiszpanski";
        }
        else if($jezyk == "")
        {
            echo "Pl";
        }
    ?>
</body>
</html>