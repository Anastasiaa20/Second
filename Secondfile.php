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
</body>

</html>