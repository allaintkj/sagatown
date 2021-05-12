<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_post()->post_title; ?></h1>
    <hr />

    <div class="row py-5">
        <div class="col">
            <?php echo get_post()->post_content; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>