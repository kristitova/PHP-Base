<?php
// задание 4

// 3 способ построения разметки страницы (способ неактивных шаблонов)

$h1Rand = rand(1, 3);
$titleRand = rand(1, 3);
$timeRand = rand(2019 - 03 - 04, 2021 - 02 - 06);

$content = file_get_contents("site.html");

$content = str_replace("{{ titleRand }}", $titleRand, $content);
$content = str_replace("{{ h1Rand }}", $h1Rand, $content);
$content = str_replace("{{ timeRand }}", $timeRand, $content);
echo $content;
