<?php
class Motherboard extends Component
{
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        protected string $socket,
        protected int $ram_slots,
    ) {
        parent::__construct($brand, $model, $price);
        $this->socket = $socket;
        $this->ram_slots = $ram_slots;
    }

    public function get_socket()
    {
        return $this->socket;
    }

    public function get_ram_slots()
    {
        return $this->ram_slots;
    }

    public function get_details()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::get_details()
            . $this->socket . "Socket, "
            . $this->ram_slots . "RAM Slot";
    }
}
