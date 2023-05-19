<?php
class PowerSource extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $watts
    ) {
        parent::__construct($brand, $model, $price);
        $this->watts = $watts;
    }

    public function get_watts()
    {
        return $this->watts;
    }

    public function get_details()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::get_details()
            . $this->watts . "W";
    }
}
