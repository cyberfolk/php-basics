
<?php
class Mouse extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $dpi
    ) {
        parent::__construct($brand, $model, $price);
        $this->dpi = $dpi;
    }

    public function get_dpi()
    {
        return $this->dpi;
    }

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::to_string()
            . $this->dpi . "DPI";
    }
}
