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
    $a = 1; 

    function Test()
    {
        // echo $a; // unfinded
    }
    
    Test();
    ?>

    <br>

    <?php
    $a = 1;
    $b = 2;

    function Sum()
    {
        global $a, $b;
        $b = $a + $b;
    }

    Sum();          // доступ к переменным массива
    echo $b;
    ?>

</body>

</html>