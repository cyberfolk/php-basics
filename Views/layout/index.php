<?php
require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/partials/head.php" ?>

<body class="bg-primary">

    <?php include __DIR__ . "/assets/partials/header.php" ?>
    <main id="app_main">
        <div class="container">
            <div class="col-6 m-auto">
                <div id="movie_card" class="card shadow mt-4 m-auto">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Genres</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php foreach ($movie_list as $index => $movie) : ?>
                                    <tr class="text-center">
                                        <td scope="row"><?= $index + 1; ?></td>
                                        <td scope="row"><?= $movie->name; ?></td>
                                        <td scope="row"><?= $movie->get_genres_to_string(); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /#card-body -->
                </div>
                <!-- /#movie_card -->
            </div>
            <!-- /.col-4 -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->
</body>

</html>