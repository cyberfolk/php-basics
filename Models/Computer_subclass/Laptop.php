<?php
class Laptop extends Computer
{
    public function __construct(protected string $brand, protected string $model, protected string $MAC, protected array $components, protected int $battery_life)
    {
        parent::__construct($brand, $model, $MAC, $components);
        $this->battery_life = $battery_life;
    }

    public function get_battery_life()
    {
        return $this->battery_life;
    }
    public function get_typology()
    {
        return get_class();
    }
}
