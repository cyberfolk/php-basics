
<?php
class Monitor extends Component
{
    public function __construct(protected string $brand, protected string $model, protected float $price, protected float $size, protected string $resolution)
    {
        parent::__construct($brand, $model, $price);
        $this->size = $size;
        $this->resolution = $resolution;
    }

    public function get_size()
    {
        return $this->size;
    }

    public function get_resolution()
    {
        return $this->resolution;
    }
    public function to_string()
    {
        return "<strong>" . get_class() . "</strong>" . ": " . $this->brand . ", " . $this->model . ", " . $this->price . "$, " . $this->size . "\", " . $this->resolution;
    }
}
