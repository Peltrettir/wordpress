<?php
/**
 * The tag template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cressida
 */
get_header();

$archive_desc = get_the_archive_description(); ?>

	<div class="container container--background">
        <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
        <?php if ( $archive_desc ) { ?>
            <div class="archive-description"><?php echo wp_kses_post( wpautop( $archive_desc ) ); ?></div>
        <?php } ?>
	</div><!-- container -->

	<div class="container container--background container--tag-feed">
		<?php get_template_part( 'parts/feed', 'category' ); ?>
	</div><!-- container -->

<?php get_footer();
