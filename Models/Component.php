<?php
class Component
{
    public function __construct(protected string $brand, protected string $model, protected float $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }

    public function get_model()
    {
        return $this->model;
    }

    public function get_price()
    {
        return $this->price;
    }
}
