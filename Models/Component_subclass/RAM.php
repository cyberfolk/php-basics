<?php
class RAM extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected string $type,
        protected int $capacity,
    ) {
        parent::__construct($brand, $model, $price);
        $this->type = $type;
        $this->capacity = $capacity;
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_capacity()
    {
        return $this->capacity;
    }

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::to_string()
            . $this->type . ","
            . $this->capacity . "GB";
    }
}
