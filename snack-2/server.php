<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];

$flag = true;

if (!strlen($name) > 3) {
    $flag = false;
}

if (!(str_contains($mail, ".") && str_contains($mail, "@"))) {
    $flag = false;
}


if (!(is_numeric($age))) {
    $flag = false;
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
    <title>Snack-2</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-3">Snack-2</h1>
        <div class="card rounded-0 shadow col-8 mt-3">
            <?php if ($flag) {
                echo "accesso riuscito";
            } else {
                echo "accesso non riuscito";
            } ?>
        </div>
    </div>
</body>

</html>