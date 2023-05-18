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

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::to_string()
            . $this->type . ", "
            . $this->get_capacity() . "GB";
    }
}
