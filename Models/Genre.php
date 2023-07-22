<?php
class Genre
{
    public $name;
    public $category;

    public function __construct($name, $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    function get_category()
    {
        return $this->category;
    }

    function get_name()
    {
        return $this->name;
    }
}
