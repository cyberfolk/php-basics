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
                <form action="server.php" method="get">
                    <div class="mb-3">
                        <label for="parking">Parking</label>
                        <input type="text" name="parking" id="parking" class="form-control" placeholder="placeholder" aria-describedby="suffixId">
                    </div>
                    <div class="mb-3">
                        <label for="stars">Stars</label>
                        <input type="number" name="stars" id="stars" class="form-control" placeholder="placeholder" aria-describedby="suffixId">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>