<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanka</title>
</head>
<body>
    <?php
    //Zad 1
    $var1 = 12;

    if($var1 >  0)
        echo "Liczba jest dodatnia \n";

    else if($var1 < 0)
        echo "Liczba jest ujemna \n";
    else
        echo "Liczba jest rowna 0 \n";


    //Zad 2
    $var2 = 13;

    if($var2 %2 == 0)
        echo "Liczba jest parzysta";
    elseif($var2 % 2 != 0)
        echo "Liczba jest nieparzysta";
    else
        echo "Liczba jest zerem";

    //Zad 3

    $var3 = "elektronika";
    $cenaEle = 130;
    $cenaOdz = 120;
    $cenaPieczyw = 70;
    $podatek = 12 / 100;
    $cenaPod = 0;

    switch($var3){
        case "elektronika":
            $cenaPod = $podatek * $cenaEle;
            $cenaEle = $cenaEle + $cenaPod;
            echo "Cena za elektronike po opodatkowaniu wynosi: $cenaEle \n";
            break;
        case "odziez":
            $cenaPod = $podatek * $cenaOdz;
            $cenaOdz = $cenaOdz + $cenaPod;
            echo "Cenaza odziez po opodatkowaniu wynosi: $cenaOdz \n";
            break;
        case "pieczywo":
            $cenaPod = $podatek * $cenaPieczyw;
            $cenaPieczyw = $cenaPieczyw + $cenaPod;
            echo "Cena pieczywa po opodatkowaniu wynosi: $cenaPieczyw \n";
            break;
    }

    //Zad 4

    $var4 = 2007;

    if($var4 %4 == 0)
        if($var4 %100 == 0)
            if($var4 %400 == 0)
                echo "Rok jest przestepny \n";
            else echo "Rok nie jest przestepny \n";
        else echo "Rok nie jest przestepny \n";        
    else
        echo "Rok nie jest przestepny \n";
    
    // Zad 5

    $var5 = 50;

    if($var5 > 0 && $var5 < 30)
        echo "Niedostateczny";
    else if($var5 > 31 && $var5 <= 50)
        echo "Dopuszczajacy";
    else if($var5 > 51 && $var5 <= 70)
        echo "Dostateczny";
    else if($var5 > 71 && $var5 <= 85)
        echo "Dobry";
    else if($var5 > 86 && $var5 <= 95)
        echo "Bardzo dobry";
    else if($var5 > 96 && $var5 <= 100) 
        echo "Celujacy";

    //Zad 6

    $a = 4;
    $b = 3;
    $c = 5;

    if($a == $b && $a == $c && $b == $c)
        echo "Trojkat jest rownoboczny";
    else if($c ** 2 == $a ** 2 + $b ** 2)
        echo "Trojkat prostokatny";
    else if($a == $b && $a != $c)
        echo "Trojkat rownoramienny";


    ?>
</body>
</html>