<?php
require_once __DIR__ . "../../../Traits/Capacitable.php";

class HDD extends Component
{
    use Capacitable;
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        int $capacity
    ) {
        parent::__construct($brand, $model, $price);
        $this->set_capacity($capacity);
    }

    public function get_details()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::get_details()
            . $this->get_capacity() . "GB";
    }
}
