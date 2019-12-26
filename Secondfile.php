<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

    echo $arr["somearray"][6];  //5
    echo $arr["somearray"][13];  //9
    echo $arr["somearray"]["a"];  //42

    ?>
    <?php
    echo "<pre>";
    array(5 => 43, 32, 56, "b" => 12);
    $arr = array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
    print_r($arr);
    echo "</pre>";

    echo "<br>";

    echo "<pre>";
    $arr = array(5 => 1, 12 => 2);
    print_r($arr);
    echo "</pre>";

    echo "<pre>";
    $arr[] = 56;
    print_r($arr);
    echo "</pre>";

    echo "<pre>";
    $arr["x"] = 42;
    print_r($arr);
    echo "</pre>";

    echo "<pre>";
    unset($arr[5]);
    print_r($arr);
    echo "</pre>";

    echo "<pre>";
    unset($arr);
    print_r($arr);
    echo "</pre>";

    echo "<br>";

    class foo
    {
        function do_foo()
        {
            echo "Doing foo.";
        }
    }

    $bar = new foo;
    $bar->do_foo();

    echo "<br>";

    $a = 5;
    $b = 4;
    if ($a > $b)
        echo "a больше, чем b";

    echo "<br>";

    $a = 5;
    $b = 6;
    if ($a > $b) {
        echo "a is greater than b";
    } else {
        echo "a is NOT greater than b";
    }

    echo "<br>";

    $a = 5;
    $b = 5;
    if ($a > $b) {
        echo "a is bigger than b";
    } elseif ($a == $b) {
        echo "a is equal to b";
    } else {
        echo "is a smaller than b";
    }

    echo "<br>";

    $a == 5;
    if ($a == 5):
        echo "a equals 5";
        echo "...";
    elseif ($a == 6):
        echo "a equals 6";
        echo "!!!";
    else:
        echo "a is neither 5 nor 6";
    endif;
    ?>


</body>

</html>