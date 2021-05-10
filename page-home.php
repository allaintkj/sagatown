<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_post()->post_title; ?></h1>
    <hr />

    <div class="row py-5">
        <div class="col">
            <?php echo get_post()->post_content; ?>
        </div>
    </div>

    <div class="row home">
        <?php

            $page_title = get_post()->post_title;

            $args = array(
                'post_type'      => 'page',
                'orderby'        => 'post_title',
                'order'          => 'ASC',
                'posts_per_page' => -1
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()):
                while ($the_query->have_posts()) : $the_query->the_post();
                    // Don't show page link if it's Home
                    if (get_the_title() === $page_title) continue; ?>

                    <div class="col-md-4 py-3">
                        <h2><?php the_title(); ?></h2>

                        <div class="sagatown-img-container mb-2 position-relative">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <p><?php echo substr(get_the_content(), 0, 300) . '...'; ?></p>

                        <p>
                            <a class="btn btn-secondary" href="<?php echo the_permalink(); ?>" role="button">
                                <?php echo the_title(); ?> &raquo;
                            </a>
                        </p>
                    </div>
                <?php endwhile;
            endif;
            
        ?>
    </div>
</div>

<?php get_footer(); ?>