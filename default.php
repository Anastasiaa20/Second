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
    function plus(&$string)
    {
        $string .= ' + Петя';
    }
    $str = 'Ира';
    plus($str);
    echo $str; // по ссылке
    ?>

    <br>

    
    <?php
    function makecoffee($type = "cappuchino")
    {
        return "Making a cup of $type. \n";
    }
    echo makecoffee();
    echo makecoffee("espresso"); // по умолчанию
    ?>

</body>

</html>