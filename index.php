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
                    <div class="col-6 m-auto">
                        <div class="card shadow mt-4 m-auto">
                            <h1>Hello</h1>
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