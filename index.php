<?php
include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/assets/partials/head.php" ?>

<body class="bg-primary">

    <?php include __DIR__ . "/assets/partials/header.php" ?>
    <main id="app_main">
        <div class="container">
            <?= $rambo->get_name() ?>

        </div>
        <!-- /.container -->
    </main>
    <!-- /#app_main -->

</body>

</html>