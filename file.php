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

    // $i = 1;
    // for ($s = $s.$i; $i <= 10; ) {
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

</body>

</html>