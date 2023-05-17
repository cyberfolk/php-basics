<?php
class Desktop extends Computer
{
    public function __construct(protected string $MAC, protected array $components)
    {
        parent::__construct($MAC, $components);
    }
}
