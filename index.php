<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ], [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ], [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ], [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ], [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

$parking = $_GET["parking"] ?? null;
$stars = $_GET["stars"] ?? null;

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
if ($parking) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel["parking"];
    });
}

if ($stars) {
    $hotels = array_filter($hotels, function ($hotel) use ($stars) {
        return $hotel["vote"] >= $stars;
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
        <h1 class="mt-3 text-center"> Hotel</h1>
        <div id="form_card" class="card rounded-0 shadow col-3 mt-4 m-auto">
            <div class="card-body">
                <form action="index.php" method="get">
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" name="parking" id="parking" type="checkbox">
                        </div>
                        <label for="parking" class="form-control">Only hotels with parking</label>
                    </div>
                    <!-- /#input-group -->
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <label for="stars">&#11088;</label>
                        </div>
                        <input type="number" name="stars" id="stars" class="form-control" placeholder="Insert number of stars">
                    </div>
                    <!-- /#input-group -->
                    <button type="submit" class="btn btn-primary d-block m-auto">Filter</button>
                </form>
            </div>
            <!-- /#card-body -->
        </div>
        <!-- /#form_card -->

        <div id="view_card" class="card rounded-0 shadow col-8 mt-4 m-auto">
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
            <!-- /#card-body -->
        </div>
        <!-- /#view_card -->
    </div>
</body>

</html>