<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_post()->post_title; ?></h1>
    <hr />

    <div class="row py-5">
        <div class="col">
            <?php echo get_post()->post_content; ?>
        </div>
    </div>

    <h1><?php echo __('Leadership', 'sagatown'); ?></h1>
    <hr />

    <div class="row text-center justify-content-center py-5 leadership">
        <?php

        $args = array(
            'post_type'      => 'leader',
            'orderby'        => 'post_title',
            'order'          => 'ASC',
            'posts_per_page' => -1
        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()):
            while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="col-md-4 py-3">
                <?php if (has_post_thumbnail()): ?>
                    
                <div class="sagatown__img-wrapper">
                    <?php echo get_the_post_thumbnail($project); ?>
                </div>

                <?php endif; ?>

                <h2><?php the_title(); ?></h2>
                
                <p><?php the_excerpt(); ?></p>

                <p>
                    <a class="btn btn-secondary" href="<?php echo the_permalink(); ?>" role="button">
                        <?php the_title(); ?> &raquo;
                    </a>
                </p>
            </div>

            <?php endwhile;
        endif; ?>
    </div>

    <h1><?php echo __('Our Partners', 'sagatown'); ?></h1>
    <hr />

    <div class="row py-5 partners">
        <?php

        $args = array(
            'category_name'  => 'partners',
            'post_type'      => 'post',
            'orderby'        => 'post_title',
            'order'          => 'ASC',
            'posts_per_page' => -1
        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()):
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
    
            <div class="col-md-4 text-center py-3">

                <?php if (has_post_thumbnail()): ?>

                <div class="sagatown-img-container mb-2 position-relative">
                </div>

                <?php endif; ?>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>

            <?php endwhile;
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>