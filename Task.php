<?php
require_once("User.php");

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private array $comments = [];

    function __construct(string $description, int $priority,  User $user)
    {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUser(): User
    {
        return $this->user;
    }
    public function getdateDone(): DateTime
    {
        return $this->dateDone;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }
    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function markIsDone($isDone): void
    {
        $this->setisDone(true);
        $this->setDateUpdated(new DateTime());
        $this->setDateDone(new DateTime());
    }

    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
    public function setisDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
    public function getComment(): array
    {
        return $this->comments;
    }

    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }
}
