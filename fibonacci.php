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
        $f = [0, 1];
        for ($i = 1; $i < $n; $i++) {
            $f[] = $f[$i] + $f[$i - 1];
        }
        return $f;
    }
    echo "<pre>";
    print_r(fib(7));
    ?>

</body>

</html>