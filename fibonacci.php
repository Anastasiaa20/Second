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
    function fib($n)
    {
        if ($n < 3) {
            return 1;
        } else {
            return fib($n - 1) + fib($n - 2);
        }
    }
    echo fib(1);
    echo ", ";
    echo fib(2);
    echo ", ";
    echo fib(3);
    echo ", ";
    echo fib(4);
    echo ", ";
    echo fib(5);
    echo ", ";
    echo fib(6);
    echo ", ";
    echo fib(7);
    echo "... ";
    ?>

    <br>

    <?php
    // function f($n)
    // {
    //     if ($n > -1 & $n < 3) {
    //         return 1;
    //     } else {
    //         if ($n > 3) {
    //             return f($n - 1) + f($n - 2);
    //         } else {
    //             return (pow((-1), abs($n) + 1) * f(abs($n)));
    //         }
    //     }
    // }
    // echo f(1);
    // echo ", ";
    // echo f(2);
    // echo ", ";
    // echo f(3);
    // echo ", ";
    // echo f(4);
    // echo ", ";
    // echo f(5);
    // echo ", ";
    // echo f(6);
    // echo ", ";
    // echo f(7);
    // echo ", ";
    // echo f(-1);
    // echo ", ";
    // echo f(-2);
    // echo ", ";
    // echo f(-3);
    // echo ", ";
    // echo f(-4);
    // echo ", ";
    // echo f(-5);
    // echo ", ";
    // echo f(-6);
    // echo ", ";
    // echo f(-7);
    // echo "... ";
    ?>

</body>

</html>