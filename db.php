<?php
include __DIR__ . "/Models/Movie.php";

$movie_list = [
    new Movie("Rambo", ["action", "genere-2", "genere-3"]),
    new Movie("Peter Pan", ["fantasy", "genere-2", "genere-3", "genere-4", "genere-5"]),
    new Movie("Avengers", ["action"]),
    new Movie("The Terminal", ["drama", "genere-1", "esempio", "esempio", "esempio"]),
    new Movie("The Lord of the Ring", ["fantasy", "esempio", "esempio"]),
    new Movie("Star Wars", ["sci-fi", "esempio", "esempio", "esempio", "esempio", "esempio"]),
];
