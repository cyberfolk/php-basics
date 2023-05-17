<?php
class Desktop extends Computer
{
    public function __construct(protected string $brand, protected string $model, protected string $MAC, protected array $components)
    {
        parent::__construct($brand, $model, $MAC, $components);
    }
    public function get_typology()
    {
        return get_class();
    }
}
