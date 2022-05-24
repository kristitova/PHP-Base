<?php
class TaskService
{


    public static function addComment(User $user, Task $task, $text): void
    {
        $comment = new Comment($user, $task, $text);
        $task->setComment($comment);
    }
}
