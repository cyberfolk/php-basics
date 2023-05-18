<?php
trait Capacitable
{
    private int $capacity;

    public function get_capacity()
    {
        return $this->capacity;
    }

    public function set_capacity($capacity)
    {
        return $this->capacity = $capacity;
    }
}
