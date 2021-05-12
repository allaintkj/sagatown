<?php get_header(); ?>

<div class="container">
    <div class="row py-5">
        <?php

        if (have_posts()):
            while (have_posts()) :the_post(); ?>

            <div class="col-md-4 py-3">
                <h2><?php the_title(); ?></h2>
                <p>
                    <?php the_time('F j, Y g:i a'); ?>
                    by 
                    <?php the_author(); ?>
                </p>

                <p><?php the_category(); ?></p>

                <?php if (has_post_thumbnail()): ?>

                <div class="sagatown-img-container mb-2 position-relative">
                </div>

                <?php endif; ?>

                <p><?php the_excerpt(); ?></p>
                
                <p>
                    <a class="btn btn-secondary" href="<?php the_permalink(); ?>" role="button">
                        <?php echo __('Read More', 'sagatown'); ?>
                        &raquo;
                    </a>
                </p>
            </div>

            <?php endwhile;
        else: ?>

        <div class="col">
            <p><b><?php echo __('No results returned', 'sagatown'); ?></b></p>
        </div>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>