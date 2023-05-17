<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";

$azione = new Genre("azione", "14+");
$animazione = new Genre("animazione", "T");
$avventura = new Genre("avventura", "6+");
$biografico = new Genre("biografico", "6+");
$catastrofico = new Genre("catastrofico", "6+");
$comico = new Genre("comico", "14+");
$commedia = new Genre("commedia", "14+");
$drammatico = new Genre("drammatico", "14+");
$erotico = new Genre("erotico", "18+");
$fantascienza = new Genre("fantascienza", "6+");
$fantasy = new Genre("fantasy", "6+");
$gangster = new Genre("gangster", "14+");
$giallo = new Genre("giallo", "14+");
$guerra = new Genre("guerra", "14+");
$horror = new Genre("horror", "18+");
$musicale = new Genre("musicale", "T");
$spionaggio = new Genre("spionaggio", "14+");
$sportivo = new Genre("sportivo", "T");
$storico = new Genre("storico", "6+");

$list_genres_1 = [$guerra, $azione];
$list_genres_2 = [$animazione, $fantasy];
$list_genres_3 = [$azione, $fantascienza];
$list_genres_4 = [$azione];
$list_genres_5 = [$avventura, $fantasy, $azione];
$list_genres_6 = [$fantascienza, $avventura];

$movie_list = [
    new Movie("Rambo", $list_genres_1),
    new Movie("Peter Pan", $list_genres_2),
    new Movie("Avengers", $list_genres_3),
    new Movie("The Terminal", $list_genres_4),
    new Movie("The Lord of the Ring", $list_genres_5),
    new Movie("Star Wars", $list_genres_6),
];
