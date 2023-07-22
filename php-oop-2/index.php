<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/Views/layout/head.php" ?>

<body class="bg-primary">

    <?php include __DIR__ . "/Views/partials/header.php" ?>
    <main id="app_main" class="mb-5">
        <div class="container">
            <div class="row">
                <?php require_once __DIR__ . "/Views/partials/products.php" ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->
    <?php include __DIR__ . "/Views/partials/footer.php" ?>

</body>

</html>