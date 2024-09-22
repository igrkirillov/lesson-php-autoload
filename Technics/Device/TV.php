<?php

namespace Technics\Device;

class TV
{
    private int $diagonal;
    private string $model;
    private string $brand;

    public const int TV_DIAGONAL_SMALL = 16;
    public const int TV_DIAGONAL_MEDIUM = 41;
    public const int TV_DIAGONAL_BIG = 65;

    public function __construct(int $diagonal, string $model, string $brand)
    {
        $this->diagonal = $diagonal;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function getDiagonal(): int {
        return $this->diagonal;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function getBrand(): string {
        return $this->brand;
    }
}