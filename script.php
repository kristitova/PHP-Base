<?php
// задание 1

for ($i = 0; $i < 10; $i++) {
    $arr1[] = rand(1, 10);
    $arr2[] = rand(1, 10);
    $arr_mult[] = $arr1[$i] * $arr2[$i];
}
print_r($arr_mult);
// задание 2
$wishes = ['счастья', 'здоровья', 'воображения', 'тепла', 'терпения'];
$epithets = ['крепкого', 'бесконечного', 'домашнего', 'искреннего'];
$name = readline("Как вас зовут? \n");
for ($i = 0; $i < 3; $i++) {
    $epithet_wish[] = $epithets[array_rand($epithets, 1)] . " " . $wishes[array_rand($wishes, 1)];
}
$last_wish = " и " . array_pop($epithet_wish);

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю " . implode(", ", $epithet_wish) . $last_wish . "!. \n";

//задание 3
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Петров Петр' => 2,
        'Смирнов Семен' => 4,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Петров Ярослав' => 5,
        'Федорова Яна' => 2,
    ]
];
foreach ($students as $group => $members) {
    $average_mark[] = array_sum(array_values($members)) / count($members);
}
$group_with_high_marks = "Группа с наибольшим значением успеваемости: " . $group . " - " . max(array_values($average_mark)) . " \n";
print_r($group_with_high_marks);

$students_for_deduction = "Студенты на отчисление: \n";
foreach ($students as $group => $members) {
    $students_for_deduction .= "Группа $group:\n";
    foreach ($members as $name => $mark) {
        if ($mark < 3) {
            $students_for_deduction .= "\t- $name (оценка $mark)\n";
        }
    }
}
print_r($students_for_deduction);

//задание 5
$arr = [];
for ($i = 0; $i < 100; $i++) {
    $num = rand(1, 200);
    if (!in_array($num, $arr)) {
        $arr[] = $num;
    }
}
print_r($arr);
