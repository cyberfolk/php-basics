<?php
class Component
{
    public function __construct(protected string $model, protected int $price)
    {
        $this->model = $model;
        $this->price = $price;
    }

    public function get_model()
    {
        return $this->model;
    }

    public function get_pricel()
    {
        return $this->price;
    }
}
