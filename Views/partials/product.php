<div class="col-4">
    <div class="card shadow mb-5 ">
        <img src=<?= $computer->get_img() ?> class="card-img-top" alt="...">

        <div class="card-body" style="height: 400px">
            <h1 class="card-title">
                <span><?= $computer->get_brand() ?></span>
                <span> - </span>
                <span><?= $computer->get_model() ?></span>
                <hr>
            </h1>
            <!-- /.card-title -->
            <div class="pc_typology">
                <span class="fw-bold">Typology:</span>
                <span><?= $computer->get_typology() ?></span>
            </div>
            <!-- /.pc_typology  -->
            <div class="MAC">
                <span class="fw-bold">MAC:</span>
                <span><?= $computer->get_MAC() ?></span>
                <hr>
            </div>
            <!-- /.MAC -->
            <div class="battery">
                <?php if ($computer instanceof Laptop) : ?>
                    <span class="fw-bold">Battery:</span>
                    <span><?= $computer->get_battery_life() ?></span>
                    <hr>
                <?php endif; ?>
            </div>
            <!-- /.battery -->
            <div class="components">
                <span><?= $computer->get_components_to_string() ?></span>
            </div>
            <!-- /.components -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col-4 -->