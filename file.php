<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php $a = 5; ?>
    <?php if ($a == 5) : ?>
        A is equal to 5
    <?php endif; ?>

    <br>

    <?php if ($a == 5) { ?>
        A is equal to 5
    <?php }; ?>

    <br>

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    ?>

    <br>

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo "$i <br>";
    }
    ?>

    <br>

    <?php

    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
    ?>

    <br>

    <?php
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }
    ?>

    <br>

    <?php
    // $s = 0;
    // $i = 1;
    // for ($s = $s + $i; $i <= 10; $i++ ) {
    //     echo $s;
    // }
    ?>

    <br>

    <?php
    $arr = array("one", "two", "three");

    foreach ($arr as $value) {
        echo "Value : $value<br>\n";
    }
    ?>

    <br>

    <?php
    $arr = array("one", "two", "three");

    foreach ($arr as $key => $value) {
        echo "Key: $key; Value : $value<br>\n";
    }
    ?>

    <br>

    <?php
    $s = 0;
    $arr = array(10, 15, 20, 25);

    foreach ($arr as $value) {
        $s = $s + $value;
    }
    echo $s;
    ?>

    <br>

    <?php
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }
    ?>

    <br>

    <?php
    $i = 1;
    while ($i <= 10) :
        echo $i;
        $i++;
    endwhile;
    ?>

    <br>

    <?php
    $s = 0;
    $i = 1;
    while ($i <= 10) {
        $s = $s + $i;
        $i++;
    }
    echo $s;
    ?>

    <br>

    <?php
    $i = 0;
    do {
        echo $i;
    } while ($i > 0);
    ?>

    <br>

    <?php
    $s = 0;
    $i = 1;
    do {
        $s = $s + $i;
        $i++;
    } while ($i <= 10);
    echo $s;
    ?>

    <br>

    <?php

    $p = 1;
    $i = 3;
    do {
        $p = $p * ($i * $i);
        $i++;
    } while ($i <= 12);
    // echo "$p";
    $format = '%s';
    echo sprintf("%01.0f", $p);
    ?>

    <br>

    <?php
    $i = 1;
    switch ($i) {
        case 4:
            echo 4;
            break;
        case 5:
            echo 5;
            break;
        default:
            echo "\$i=$i";
    }
    ?>

    <br>

    <?php
    $i = 11;
    switch ($i) {
        case 0:
            echo "ноль";
            break;
        case 1:
            echo "один";
            break;
        case 2:
            echo "два";
            break;
        case 3:
            echo "три";
            break;
        case 4:
            echo "четыре";
            break;
        case 5:
            echo "пять";
            break;
        case 6:
            echo "шесть";
            break;
        case 7:
            echo "семь";
            break;
        case 8:
            echo "восемь";
            break;
        case 9:
            echo "девять";
            break;
        default:
            echo "нет такой цифры";
    }
    ?>

    <br>

    <?php
    $s = 10;
    $k = 12;
    $n = 12;
    ?>

    <!-- HOMEWORK -->
    <?php
    $s = 10;
    $k = 12;
    $n = 1;
    do {
        $b = $s * ($k%12%10);
        $s = $s + $b;
    } while ($n <= 12);
    echo $s;
    ?>
</body>

</html>