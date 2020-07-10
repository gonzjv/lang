<div class="row">
    <div class="col-2 ml-5 ">
        
    </div>
    <div class="col-3 ml-5 text-center lead background rounded ">
        <h2><?php echo $title; ?></h2>

        <?php foreach ($news as $news_item): ?>

            <h3><?php echo $news_item['title']; ?></h3>
            <div class="main">
                <?php echo $news_item['text']; ?>
            </div>
            <p><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">View article</a></p>

        <?php endforeach; ?>
    </div>
</div>
</div>
</div>