<?php
require_once __DIR__ . "../../../Traits/Capacitable.php";
class CPU extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $core_num,
        protected float $frequency,
    ) {
        parent::__construct($brand, $model, $price);
        $this->core_num = $core_num;
        $this->frequency = $frequency;
    }

    public function get_core_num()
    {
        return $this->core_num;
    }

    public function get_frequency()
    {
        return $this->frequency;
    }

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::to_string()
            . $this->get_core_num() . " Core , "
            . $this->get_frequency() . " GHz";
    }
}
