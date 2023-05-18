<?php
require_once __DIR__ . "/Database/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/Views/layout/head.php" ?>

<body class="bg-primary">

    <?php include __DIR__ . "/Views/partials/header.php" ?>
    <main id="app_main" class="mb-5">
        <div class="container">
            <div class="row">
                <?php foreach ($computer_list as $computer) : ?>
                    <?php include __DIR__ . "/Views/partials/product.php" ?>
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->
    <?php include __DIR__ . "/Views/partials/footer.php" ?>

</body>

</html>