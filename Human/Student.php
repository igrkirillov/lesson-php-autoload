<?php

namespace Human;

class Student
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Возвращает имя студента
     *
     * @return string name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Возвращает возраст студента
     *
     * @return int age
     */
    public function getAge(): int
    {
        return $this->age;
    }
}