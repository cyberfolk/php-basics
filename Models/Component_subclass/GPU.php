<?php
require_once __DIR__ . "../../../Traits/Capacitable.php";
class GPU extends Component
{
    use Capacitable;
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $reserved_memory,
        protected float $frequency,
        int $capacity
    ) {
        parent::__construct($brand, $model, $price);
        $this->reserved_memory = $reserved_memory;
        $this->frequency = $frequency;
        $this->set_capacity($capacity);
    }

    public function get_reserved_memory()
    {
        return $this->reserved_memory;
    }

    public function get_frequency()
    {
        return $this->frequency;
    }

    public function get_details()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::get_details()
            . $this->get_reserved_memory() . " GB"
            . $this->get_frequency() . " GHz";
    }
}
