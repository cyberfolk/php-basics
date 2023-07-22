<?php
class Movie
{
    public $name;
    public $genres;

    public function __construct($name, array $genres)
    {
        foreach ($genres as $genre) {
            if (!($genre instanceof Genre)) {
                trigger_error('Array of objects passed to constructor must contain instances of Genre', E_USER_ERROR);
            }
        }
        $this->name = $name;
        $this->genres = $genres;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_genres_to_string()
    {
        $return_string = "";
        foreach ($this->genres as $genre) {
            $return_string = $return_string . $genre->get_name() . ", ";
        }
        return rtrim($return_string, ", ");
    }
}
