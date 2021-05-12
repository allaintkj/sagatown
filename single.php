<?php get_header(); ?>

<div class="container">
    <p>
    	<?php the_time('F j, Y g:i a'); ?>
    	by
    	<?php echo get_the_author_meta('display_name', $wp_query->post->post_author); ?>
	</p>
    
    <h1><?php the_title(); ?></h1>
    <hr />

    <div class="row pt-5">
        <div class="col single-img">
            <?php if (has_post_thumbnail()): ?>
                
                <div class="sagatown-img-container mb-2 position-relative">
                </div>

            <?php endif; ?>
        </div>
    </div>

    <div class="row py-5">
        <div class="col">
        	<?php echo $wp_query->post->post_content; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>