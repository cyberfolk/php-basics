<?php
require_once __DIR__ . "/Database/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/Views/partials/head.php" ?>

<body class="bg-primary">

    <?php include __DIR__ . "/Views/partials/header.php" ?>
    <main id="app_main">
        <div class="container">
            <div class="row">
                <?php foreach ($computer_list as $computer) : ?>
                    <div class="col-4 m-auto">
                        <div class="card shadow mt-4 m-auto">
                            <div class="card-body">
                                <h1 class="card-title">
                                    <span><?= $computer->get_brand() ?></span>
                                    <span> - </span>
                                    <span><?= $computer->get_model() ?></span>
                                </h1>
                                <div>
                                    <span class="fw-bold">Tipologia:</span>
                                    <span><?= $computer->get_typology() ?></span>
                                </div>
                                <div>
                                    <span class="fw-bold">MAC:</span>
                                    <span><?= $computer->get_MAC() ?></span>
                                </div>
                                <div>
                                    <span><?= $computer->get_components_to_string() ?></span>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-4 -->
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->
</body>

</html>