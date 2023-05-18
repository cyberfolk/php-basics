
<?php
class Keyboard extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected int $extension
    ) {
        parent::__construct($brand, $model, $price);
        $this->extension = $extension;
    }

    public function get_extension()
    {
        return $this->extension;
    }

    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::to_string()
            . $this->extension . "%";
    }
}
