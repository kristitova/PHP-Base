<?php
//задание 1

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$type_num = function (int $num): string {
    if ((bool)($num & 1)) {
        return "нечетное число \n";
    } else {
        return "четное число \n";
    }
};
$res = array_map($type_num, $arr);
print_r(array_combine($arr, $res));

//задание 2
$param_num = function (array $num_): array {
    $param_type[] = max($num_);
    $param_type[] = min($num_);
    $param_type[] = array_sum($num_) / count($num_);
    return $param_type;
};
print_r($param_num($arr));

//задание 3
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];
$thing = readline("Что необходимо найти? ");
function search_value(string $search_thing, array $arr): bool
{
    foreach ($arr as $value) {
        if (is_array($value)) {
            return search_value($search_thing, $value);
        } else {
            if ($value = $search_thing) {
                return true;
            }
        }
    }
    return false;
}
var_dump((bool)search_value($thing, $box));

//задание 4
$num = (int)readline("Введите число для расчета факториала ");

$factorial = function (int $number) use (&$factorial): int {
    return ($number == 0 || $number == 1) ? 1 : ($number * $factorial($number - 1));
};
print_r($factorial($num) . "\n");

//задание 5

require_once("scriptFunc.php");

function mathOperation(string $operation_caption, float $a, float $b): ?float
{
    return function_exists($operation_caption) ? $operation_caption($a, $b) : null;
}
$operation = readline("Введите операцию для вычисления: \n
        - add \n
        - minus \n
        - mult \n
        - div \n ");
$num1 = (float)readline("Введите первое число ");
$num2 = (float)readline("Введите второе число ");
print_r(mathOperation($operation, $num1, $num2));
