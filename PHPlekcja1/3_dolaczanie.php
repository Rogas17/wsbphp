<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Lista miast</h4>
    <?php
//include, include_once, require, require_once
//        include "./scripts/city1.php";
        include "./scripts/city.php";
        include_once "./scripts/city.php";

        require_once "./scripts/city.php";
        require "./scripts/cityq.php";

    ?>
    <h4>Kod po dołączeniu skryptu</h4>
</body>
</html>