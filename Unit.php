<?php
class Unit
{
    private string $name;
    private int $life;
    private int $attackValue;

    function __construct(string $name, int $life, int $attackValue)
    {
        $this->name = $name;
        $this->life = $life;
        $this->attackValue = $attackValue;
    }

    public function getlife()
    {
        return $this->life;
    }

    public function getattackValue()
    {
        return $this->attackValue;
    }

    public function setName($life): void
    {
        $this->life = $life;
    }


    public function attack(Unit $unit)
    {
        return $unit->life -= $this->attackValue;
    }
}
