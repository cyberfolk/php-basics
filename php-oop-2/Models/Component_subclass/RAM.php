<?php
class RAM extends Component
{
    use Capacitable;
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected string $type,
        int $capacity,
    ) {
        parent::__construct($brand, $model, $price);
        $this->type = $type;
        $this->set_capacity($capacity);
    }

    public function get_type()
    {
        return $this->type;
    }

    public function get_details()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::get_details()
            . $this->type . ", "
            . $this->get_capacity() . "GB";
    }
}
