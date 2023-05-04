<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

# 1 WAY: array_filter + callback
/* function have_parking($hotel){
    return $hotel["parking"];
}

function min_stars($hotel){
    return $hotel["vote"] >= $_GET["stars"];
}

if ($_GET["parking"]) {
    $hotels = array_filter($hotels, "have_parking");
}

if ($_GET["stars"]) {
    $hotels = array_filter($hotels, "min_stars");
} */

# 1 WAY: array_filter + anonymous function
if ($_GET["parking"]) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel["parking"];
    });
}

$min_stars =  $_GET["stars"];
if ($_GET["stars"]) {
    $hotels = array_filter($hotels, function ($hotel) use ($min_stars) {
        return $hotel["vote"] >= $min_stars;
    });
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>hotel</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-3"> Hotel</h1>
        <div class="card rounded-0 shadow col-8 mt-3">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Parking</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Distance to center</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($hotels as $index => $hotel) : ?>
                            <tr class="text-center">
                                <td scope="row"><?= $index + 1; ?></td>
                                <?php foreach ($hotel as $key => $value) : ?>
                                    <td><?= $value; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>