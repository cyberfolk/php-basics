<?php
class GPU extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $reserved_memory,
        protected float $frequency,
    ) {
        parent::__construct($brand, $model, $price);
        $this->reserved_memory = $reserved_memory;
        $this->frequency = $frequency;
    }

    public function get_reserved_memory()
    {
        return $this->reserved_memory;
    }

    public function get_frequency()
    {
        return $this->frequency;
    }

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>"  . ": "
            . $this->brand . ", "
            . $this->model . ", "
            . $this->price . "$, "
            . $this->reserved_memory . " GB"
            . $this->frequency . " GHz";
    }
}
