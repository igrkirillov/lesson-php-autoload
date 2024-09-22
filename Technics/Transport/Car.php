<?php

namespace Technics\Transport;

class Car
{
    private string $regGovNumber;
    private string $brand;
    private string $model;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    /**
     * Устанавливает гос рег знак
     *
     * @param string $regGovNumber
     */
    public function setRegGovNumber(string $regGovNumber): void
    {
        $this->regGovNumber = $regGovNumber;
    }

    /**
     * Получить номер гос рег знака
     *
     * @return string
     */
    public function getRegGovNumber(): string
    {
        return $this->regGovNumber;
    }

    /**
     * Получить марку
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Получить модель
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
}