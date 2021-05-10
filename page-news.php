<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_post()->post_title; ?></h1>
    <hr />
    
    <div class="row py-5">
        <div class="col">
            <?php echo get_post()->post_content; ?>
        </div>
    </div>

    <div class="row py-5">

        <?php

            $args = array(
                'category_name'  => 'news',
                'post_type'      => 'post',
                'orderby'        => 'date',
                'order'          => 'ASC',
                'posts_per_page' => -1
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()):
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="col-md-4 py-3">
                        <h2><?php the_title(); ?></h2>
                        <p>
                            <?php the_time('F j, Y g:i a'); ?>
                            by 
                            <?php the_author(); ?>
                        </p>

                        <?php if (has_post_thumbnail()): ?>

                            <div class="sagatown-img-container mb-2 position-relative">
                                <?php the_post_thumbnail(); ?>
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
                    <p><b><?php echo __('No news at this time', 'sagatown'); ?></b></p>
                </div>

            <?php endif;
            
        ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>