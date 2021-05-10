<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_post()->post_title; ?></h1>
    <hr />

    <div class="row py-5">
        <div class="col">
            <?php echo get_post()->post_content; ?>
        </div>
    </div>

    <div class="row py-5 text-center portfolio">

        <?php

            $args = array(
            	'category_name'  => 'portfolio',
                'post_type'      => 'post',
                'orderby'        => 'date',
                'order'          => 'ASC',
                'posts_per_page' => -1
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()):
                while ($the_query->have_posts()) : $the_query->the_post(); ?>

			        <div class="col-md-4 py-3">
			        	<a href="<?php the_permalink(); ?>">
				            <div class="sagatown-img-container mb-2 position-relative mx-auto">
                                <?php the_post_thumbnail(); ?>
				            </div>
				        </a>

			            <h2><?php the_title(); ?></h2>

			            <p><?php the_excerpt(); ?></p>

                        <p><a class="btn btn-secondary" href="<?php echo the_permalink(); ?>" role="button"><?php the_title(); ?> &raquo;</a></p>
			        </div>

                <?php endwhile;
            endif;
            
        ?>

    </div>
</div>

<?php get_footer(); ?>