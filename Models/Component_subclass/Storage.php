<?php
class Storage extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $capacity
    ) {
        parent::__construct($brand, $model, $price);
        $this->capacity = $capacity;
    }

    public function get_capacity()
    {
        return $this->capacity;
    }

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::to_string()
            . $this->capacity . "GB";
    }
}
