<?php
class Movie
{
    public $name;
    public $genre;

    public function __construct($name, $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_genre()
    {
        return $this->genre;
    }
}
