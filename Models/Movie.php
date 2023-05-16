<?php
class Movie
{
    public $name;
    public $genres;

    public function __construct($name, $genres)
    {
        $this->name = $name;
        $this->genres = $genres;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_genres_to_string()
    {
        return implode(", ", $this->genres);
    }
}
