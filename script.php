<?php
//задание 1
include "Task.php";
include "Unit.php";
include "Comment.php";
include "TaskService.php";

$user1 = new user("Petrov", "petrov@mail.ru");
$task1 = new Task("work", 1, $user1);
print_r($task1);


//задание 4
$unit1 = new Unit("knight", 30, 10);
$unit2 = new Unit("ork", 40, 15);
$unit2->attack($unit1);
print_r($unit1);
print_r($unit2);

//задание 2
TaskService::addComment($user1, $task1, "today");
$user2 = new user("Sidorov", "sidorov@mail.ru");
$task2 = new Task("walk", 2, $user2);
TaskService::addComment($user2, $task2, "tomorrow");
print_r($task1);
