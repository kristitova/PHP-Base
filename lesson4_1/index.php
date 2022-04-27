<?php

// задание 4

// 1 способ построения разметки страницы

$h1Rand = rand(1, 3);
$titleRand = rand(1, 3);
$timeRand = rand(2019 - 03 - 04, 2021 - 02 - 06);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titleRand ?></title>
</head>

<body>
    <h1><?= $h1Rand ?></h1>
    <time><?= $timeRand ?></time>
</body>

</html>