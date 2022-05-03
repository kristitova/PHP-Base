<?php
// задание 1

$true_answer = 988;

do {
    $user_answer = readline("В каком году произошло крещение Руси? Варианты ответа: 810, 988, 740 ");
    if ($user_answer == $true_answer) {
        echo "Вы угадали! \n";
    } elseif ($user_answer == 810 || $user_answer == 740) {
        echo "Не верно \n";
        break;
    } elseif ($user_answer != 810 || $user_answer != 988 || $user_answer != 740) {
        echo "Выберите корректный ответ. Попробуйте еще раз \n";
    }
} while ($user_answer != $true_answer);

// задание 2
$name = readline("Как вас зовут? \n");
$task_day = readline("Сколько задач запланировано у вас на день? \n");

for ($i = 0; $i < $task_day; $i++) {

    $task = readline("Какая задача стоит перед вами сегодня? \n");
    $time = readline("Сколько примерно времени эта задача у вас займет? \n");
    $own_tasks .= " - " . $task . " " . " ($time ч) \n";
    $sum_own += $time;
}

echo "$name, сегодня у вас запланировано $task_day приоритетных задачи на день: \n
$own_tasks
Примерное время выполнения плана = $sum_own ч \n";

// задание 3

$finger = readline("Введите интересующий номер пальца \n");
for ($n = 0; $n < $finger; $n++) {
    switch (true) {
        case ($finger == (8 * $n + 1)):
            echo "Большой палец \n";
            break;
        case ($finger == (2 * $n + 6 * $n) || $finger == (2 * $n + 6 * $n + 2)):
            echo "Указательный палец \n";
            break;
        case ($finger == (4 * $n + 3)):
            echo "Средний палец \n";
            break;
        case ($finger == (4 + 8 * $n) || $finger == (4 + 8 * $n + 2)):
            echo "Безымянный палец \n";
            break;
        case ($finger == (8 * $n + 5)):
            echo "Мизинец \n";
            break;
        case ($finger < 0):
            echo "Введите корректный номер \n";
            break;
    }
}

//задание 4

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz \n";
    } elseif ($i % 5 == 0) {
        echo "Buzz \n";
    } elseif ($i % 3 == 0) {
        echo "Fizz \n";
    } else {
        echo "$i \n";
    }
}

//задание 5
$apple = readline("Введите количество яблок \n");
switch (true) {
    case $apple == 1:
        echo "$apple яблоко\n";
        break;
    case $apple >= 2 && $apple < 5:
        echo "$apple яблока\n";
        break;
    case $apple >= 5:
        echo "$apple яблок\n";
        break;
}
