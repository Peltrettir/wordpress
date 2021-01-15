<?php
/**
 * The loop / blog feed
 *
 * @package Cressida
 */
$cressida_blog_feed_heading = cressida_get_option( 'cressida_blog_feed_heading' ); ?>

<div id="blog-feed" class="section-feed">
	<?php if ( is_front_page() ) : ?>
		<h2 class="section-title"><span><?php echo esc_html( $cressida_blog_feed_heading ); ?></span></h2>
    <?php elseif( is_search() ) : ?>
        <h2 class="section-title"><span><?php _e( 'Search results for: ', 'cressida' ); ?> <?php echo get_search_query(); ?></span></h2>
	<?php endif; // is_front_page() ?>

	<div class="row">
		<?php
			/**
			 * The Loop
			 */
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'parts/entry', get_post_format() );

			endwhile; 
            
            else:
            
                get_template_part( 'parts/feed', 'no-results' );
                
            endif;
		?>
	</div><!-- row -->
</div><!-- section-feed row -->

<?php
	/**
	 * Posts navigation
	 */
	get_template_part( 'parts/archive', 'navigation' );