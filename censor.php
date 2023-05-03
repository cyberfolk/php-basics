<?php

$text = $_POST["text"];
$len_text = strlen($text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>badword</title>
    </head>
    <body>
        <div class="container">
            <h1 class="mt-3">Bad Words</h1>
            <div class="card rounded-0 shadow col-8 mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="fw-bold">Testo Inserito:</div>
                        <div> <?php echo $text ?> </div>
                        <span class="fw-bold">Lunghezza: <?php echo $len_text ?></span>   
                    </li>
                    <li class="list-group-item">
                        <div class="fw-bold">Testo corretto:</div>
                        <div> <?php echo $text ?> </div>
                        <span class="fw-bold">Lunghezza: <?php echo $len_text ?></span>   
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>


