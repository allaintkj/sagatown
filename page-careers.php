<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_post()->post_title; ?></h1>
    <hr />

    <div class="row py-5">
        <div class="col">
            <?php echo get_post()->post_content; ?>
        </div>
    </div>

    <h1><?php echo __('Job Postings', 'sagatown'); ?></h1>
    <hr />

    <?php

    $args = array(
        'category_name'  => 'careers',
        'post_type'      => 'post',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'posts_per_page' => -1
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()):
        $index = 0;

        while ($the_query->have_posts()) : $the_query->the_post();
            $index++;

            if ($index !== 1): ?>

                <hr />
                
            <?php endif; ?>

            <div class="row py-5">
                <div class="col-10 mx-auto">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>

        <?php endwhile;
    else: ?>

    <div class="row py-5">
        <div class="col-10 mx-auto">
            <p><b><?php echo __('No postings found', 'sagatown'); ?></b></p>
        </div>
    </div>

    <?php endif; ?>
</div>

<?php get_footer(); ?>