<div class="row text-light">
    <div class="col-3 ml-5 ">
        <h2><?php echo $title; ?></h2>

        <?php foreach ($classes as $class_item): ?>

            <div>
                <?php echo $class_item['name']; ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>